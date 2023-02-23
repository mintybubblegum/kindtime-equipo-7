import React from "react";
import Kindtime from "../../assets/kindtime-logo.png";

export default function Navbar() {
  return (
    <div>
      <nav
        className="bg-dark-blue border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900"
        data-testid="navbar"
      >
        <div className="container flex flex-wrap items-center justify-between mx-auto">
          <a href="/" className="flex items-center" data-testid="logoLink">
            <img
              src={Kindtime}
              className="h-9 mr-3 sm:h-11"
              alt="Kindtime Logo"
            />
          </a>
          <button
            data-collapse-toggle="navbar-default"
            type="button"
            className="inline-flex items-center p-2 ml-3 text-sm text-dark-blue rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-white dark:hover:bg-blue dark:focus:ring-gray-600"
            aria-controls="navbar-default"
            aria-expanded="false"
          >
            <span className="sr-only">Open main menu</span>
            <svg
              className="w-6 h-6"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
          <div className="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
              className="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-dark-blue md:flex-row md:space-x-8 md:mt-0 md:text-medium md:font-medium md:border-0 md:bg-dark-blue dark:bg-blue md:dark:bg-dark-blue dark:border-gray-700"
              data-testid="linksList"
            >
              <li>
                <a
                  href="/"
                  className="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:hover:text-yellow md:p-0 dark:text-white"
                  aria-current="page"
                  data-testid="outLink"
                >
                  Home
                </a>
              </li>
              <li>
                <a
                  href="/about"
                  className="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-yellow dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                  data-testid="outLink"
                >
                  About
                </a>
              </li>
              <li>
                <a
                  href="/contact"
                  className="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-yellow dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                  data-testid="outLink"
                >
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  );
}
