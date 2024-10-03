import express from "express";
import { getSignup, signup } from "../controllers/authController.js";

const router = express.Router();

router.get("/", getSignup);
router.post("/signup", signup);

export default router;
