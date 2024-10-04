import path, { dirname } from "path";
import { fileURLToPath } from "url";
import supabase from "../config/database.js";
import bcrypt, { hash } from "bcrypt"; // For password hashing

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Serve signup.html page
export const getSignup = (req, res) => {
  res.sendFile(path.join(__dirname, "../../src/signup.html"));
};

// Handle user signup
export const signup = async (req, res) => {
  const { username, email, password } = req.body;

  // Log the received data
  console.log("Received data:", req.body);

  if (!email || !password || !username) {
    return res.status(400).json({ message: "All fields are required." });
  }

  try {
    const hashedPassword = await bcrypt.hash(password, 10);
    const { data, error } = await supabase
      .from("users")
      .insert([{ username, email, password: hashedPassword }]);

    if (error) {
      return res.status(400).json({ message: error.message });
    }

    res.status(201).json({ message: "Signup successful!", data });
  } catch (err) {
    console.error("Error during signup:", err);
    res.status(500).json({ message: "Internal server error" });
  }
};
