import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import AdList from "./AdList";

describe("AdList component", () => {
  render(<AdList />);
  it("renders 4 ad cards", () => {
    expect(screen.getAllByTestId(/adCard/i).length).toBe(4);
  });
});
