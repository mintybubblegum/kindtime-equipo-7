import { useState } from "react";
import reactLogo from "./assets/react.svg";
import "./App.css";
import AdList from "./components/AdList/AdList";

function App() {
  const [count, setCount] = useState(0);

  return (
    <div>
      <AdList></AdList>
    </div>
  );
}

export default App;
