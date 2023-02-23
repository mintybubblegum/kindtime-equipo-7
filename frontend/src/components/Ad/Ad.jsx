import React from "react";
import Card from "../partials/Card";
import styles from "./Ad.module.css";

const Ad = ({ ad }) => {
  return (
    <div className={`card ${styles.card}`} data-testid="adCard">
      <img
        className={`card-img-top ${styles.cardImgTop}`}
        src={ad.image}
        alt="image of the ad"
      />
      <div className="card-body">
        <h5 className="card-title">{ad.title}</h5>
        <p className="card-text">{ad.description}</p>
        <div className={styles.cardBtnsContainer}>
          <button
            className={`${styles.btn} ${styles.btnMore}`}
            data-testid="seeMoreBtn"
          >
            See more {"->"}
          </button>
          <button
            className={`${styles.btn} ${styles.btnContact}`}
            data-testid="contactBtn"
          >
            Contact
          </button>
        </div>
      </div>
    </div>
    // <Card ad={ad}/>
  );
};

export default Ad;
