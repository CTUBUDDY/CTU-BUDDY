import express from "express";
import homeRouter from "./homeRoutes.js";
import authRouter from "./authRouter.js";

const router = express.Router();

router.use("/", homeRouter);
router.use("/auth", authRouter);
export default router;
