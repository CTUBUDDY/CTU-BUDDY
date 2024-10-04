import express from "express";
import routes from "./routes/index.js";
import path, { dirname } from "path";
import { fileURLToPath } from "url";

const port = process.env.PORT || 8000; // Use dynamic port or 8000 for local development

const app = express();
app.use(express.urlencoded({ extended: true }));

// Define __dirname for ES modules
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

app.use(express.json());
app.use(express.urlencoded({ extended: false }));

// Serve static files from the frontend directory (adjust if needed)
app.use(express.static(path.join(__dirname, "../src")));

app.use("/", routes);

// Start the server
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
