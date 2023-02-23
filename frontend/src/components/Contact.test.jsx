import { describe, expect, it } from "vitest";
import { render, screen } from "@testing-library/react";
import Contact from "./Contact";

describe("Contact component", () => {
  render(<Contact />);
  it("renders input for email", () => {
    expect(screen.getByPlaceholderText(/name@gmail.com/i)).toBeDefined();
  });
  it("renders input for subject", () => {
    expect(
      screen.getByPlaceholderText(/Let us know how we can help you/i)
    ).toBeDefined();
  });
  it("renders textarea for message", () => {
    expect(screen.getByPlaceholderText(/Leave a comment.../i)).toBeDefined();
  });
  it("renders submit btn", () => {
    expect(screen.getByText(/Send message/i)).toBeDefined();
  });
});
