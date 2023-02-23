import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import Searchbar from "./Searchbar";

describe("Searchbar component", () => {
  render(<Searchbar />);
  it("renders input toenter text to search", () => {
    expect(
      screen.getByPlaceholderText(/Search for a service.../i)
    ).toBeDefined();
  });
});
