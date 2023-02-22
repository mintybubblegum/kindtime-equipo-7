import React from "react";
import styles from "./Ad.module.css";

const Ad = ({ ad }) => {
  return (
    <div className={`card ${styles.card}`}>
      <img
        className={`card-img-top ${styles.cardImgTop}`}
        src={ad.image}
        alt="image of the ad"
      />
      <div className="card-body">
        <h5 className="card-title">{ad.title}</h5>
        <p className="card-text">{ad.description}</p>
        <div className={styles.cardBtnsContainer}>
          <button className={`${styles.btn} ${styles.btnMore}`}>
            See more {"->"}
          </button>
          <button className={`${styles.btn} ${styles.btnContact}`}>
            Contact
          </button>
        </div>
      </div>
    </div>
  );
};

export default Ad;
