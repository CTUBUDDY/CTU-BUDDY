import express from "express";
import routes from "./routes/index.js";
import path, { dirname } from "path";
import { fileURLToPath } from "url";

const port = 8000;

const app = express();
app.use(express.urlencoded({ extended: true }));
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(express.static(path.join(__dirname, "../src")));

app.use("/", routes);
app.listen(port, () => {
  console.log(`server is running on port ${port}`);
});
