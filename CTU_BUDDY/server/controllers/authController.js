import path, { dirname } from "path";
import { fileURLToPath } from "url";
import supabase from "../config/database.js";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

export const getSignup = (req, res) => {
  res.sendFile(path.join(__dirname, "../../src/signup.html"));
};

export const signup = async (req, res) => {
  const { username, email, password } = req.body;
  // Basic validation
  if (!email || !password || !username) {
    return res
      .status(400)
      .json({ message: "Email and password are required." });
  }

  try {
    // Insert the new user into the public.users table
    const { data, error } = await supabase
      .from("public.users")
      .insert([{ username, email, password }]); // Note: Store passwords securely (hashed) in a real application

    if (error) {
      return res.status(400).json({ message: error.message });
    }

    res.status(201).json({ message: "Signup successful!", data });
  } catch (err) {
    console.error(err);
    res.status(500).json({ message: "Internal server error" });
  }
};
