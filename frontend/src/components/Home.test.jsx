import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import Home from "./Home";

// TODO: mock axios call?
// describe("Home component", () => {
//   render(<Home />);
//   it("renders searchbar", () => {
//     expect(
//       screen.getByPlaceholderText(/Search for a service.../i)
//     ).toBeDefined();
//   });
//   it("renders a header with the slogan", () => {
//     expect(screen.getByTestId(/h1Slogan/i)).toBeDefined();
//   });
// });
