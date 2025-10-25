import { useEffect, useState } from "react";

function App() {
  const [status, setStatus] = useState("Connecting to Laravel API...");

  useEffect(() => {
    fetch("http://127.0.0.1:8000/api/test")
      .then((res) => res.json())
      .then((data) => setStatus(data.message))
      .catch(() => setStatus("Failed to connect to Laravel API"));
  }, []);

  return (
    <div className="min-h-screen flex items-center justify-center bg-gray-900 text-white text-4xl font-bold">
      <h1>React + Laravel Connection</h1>
      <p className="ml-4 text-lg font-normal">{status}</p>
    </div>
  );
}

export default App;
