import path, { dirname } from "path";
import { fileURLToPath } from "url";
import supabase from "../config/database.js";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

export const getSignup = (req, res) => {
  res.sendFile(path.join(__dirname, "../../src/signup.html"));
};

export const signup = async (req, res) => {
  const { email, password } = req.body;

  try {
    let { data, error } = await supabase.auth.signUp({
      email: email,
      password: password,
    });

    if (error) {
      return res.status(400).json({ message: error.message });
    }

    res.status(201).json({ message: "Signup successful!", data });
  } catch (err) {
    console.error(err);
    res.status(500).json({ message: "Internal server error" });
  }
};
