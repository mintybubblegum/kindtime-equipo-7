import React from "react";

export default function Footer() {
  return (
    <div>
      <footer className="p-4 bg-dark-blue shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-900 lg:px-20">
        <span className="text-sm text-white sm:text-center dark:text-gray-400">
          © 2023{" "}
          <a href="/" className="hover:underline" data-testid="homeLink">
            Kindtime™
          </a>
          . All Rights Reserved.
        </span>
        <ul className="flex flex-wrap items-center mt-3 text-sm text-white dark:text-gray-400 sm:mt-0">
          <li>
            <a
              href="/about"
              className="mr-4 hover:underline md:mr-6 "
              data-testid="aboutLink"
            >
              About
            </a>
          </li>
          <li>
            <a href="#" className="mr-4 hover:underline md:mr-6">
              Privacy Policy
            </a>
          </li>
          <li>
            <a href="#" className="mr-4 hover:underline md:mr-6">
              Licensing
            </a>
          </li>
          <li>
            <a
              href="/contact"
              className="hover:underline"
              data-testid="contactLink"
            >
              Contact
            </a>
          </li>
        </ul>
      </footer>
    </div>
  );
}
