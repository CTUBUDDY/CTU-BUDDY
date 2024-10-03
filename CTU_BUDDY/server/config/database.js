import { createClient } from "@supabase/supabase-js";

const supabaseUrl = "https://qdueofbuyfidoyvqrpgz.supabase.co";
const supabaseKey =
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InFkdWVvZmJ1eWZpZG95dnFycGd6Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3Mjc5NzYyMjAsImV4cCI6MjA0MzU1MjIyMH0.Jgf7OlFSOYB1IJ9r1TkgWH18fA-QYZV1GDreFjV7r0A";
const supabase = createClient(supabaseUrl, supabaseKey);

export default supabase;
