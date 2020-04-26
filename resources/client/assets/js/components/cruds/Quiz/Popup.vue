<template>
  <div id="popup" v-if="modal" v-once>
    <div class="container2">
      <div class="popup-row1">
        <img src="../../../../images/logocirclemdpi.png" alt srcset />
      </div>
      <div class="popup-row2">
        <h1>Empeal COVID-19 Kit</h1>
      </div>
      <div class="popup-row3">
        <img src="../../../../images/covid.png" alt srcset />
      </div>
      <div class="popup-row4">
        <router-link to="/quiz/covid-self-assessment">
          <button id="cta-popup" type="submit">Self-Assessment</button>
        </router-link>
        <router-link to="/quiz/covid-visitor-checklist">
          <button id="cta-popup" type="submit">Visitor Checklist</button>
        </router-link>
        <a href="https://empeal.com/covidresources">
          <button id="cta-popup" type="submit">Resources</button>
        </a>
        <br />
        <a href="https://empeal-health.typeform.com/to/FuuOav">
          <button id="cta-popup" type="submit">Virtual Catch-up</button>
        </a>
        <br />
        <h2>Live Events</h2>
        <br />

        <div class="live-events">
          <!-- Title -->

          <!-- <div v-for="(post, index) in allLiveevents" :key="index"> -->
          <!-- <b>No events scheduled at the moment - Watch this space </b> -->
          <b>No events available</b>

          <!-- =========Live Event Section====================================================================== -->

          <!-- Date -->
          <span class="date"></span>
          <br />
          <div class="timings">
            <!-- <span class="time">
                Timestamp

                <vac :end-time="1584648000000">
                  <template v-slot:process="{ timeObj }">
                    <span>{{
                      `Time Remaining: ${timeObj.ceil.h}:${timeObj.m}:${timeObj.s}`
                    }}</span>
                  </template>
                  <template v-slot:finish>
                    <span>Event Expired</span>
                  </template>
                </vac>
            </span>-->
            <!-- <span class="join">
                <a
                  href="https://us04web.zoom.us/j/374004451"
                >
                  <button id="cta-popup1" type="submit">Join</button>
                </a>
            </span>-->
            <!-- </div> -->
            <!-- ============Live Event Section Ended=============================================================== -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import gql from "graphql-tag";

export default {
  props: {
    modal: Boolean
  },
  methods: {
    open() {
      this.$emit("opened");
    },
    close() {
      this.$emit("clicked");
    }
  }
  // apollo: {
  //   allLiveevents: gql`
  //     {
  //       allLiveevents(orderBy: date_DESC, first: "1") {
  //         timestamp
  //         title
  //         date
  //         link {
  //           url
  //         }
  //       }
  //     }
  //   `
  // }
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap");

.container2 {
  width: 800px;
  height: 600px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 15px;
  position: fixed;
  padding: 15px;
  color: #12477c;
  margin-left: 32.5%;
  margin-top: 2%;
  justify-content: center;
  align-content: center;
  text-align: center;
  z-index: 20;
}

.container2:before {
  position: relative;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 15px;
  z-index: -1;
}

/* .container2:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: -2;
} */

.popup-row1 {
  margin-top: 10px;
}
.popup-row1 img {
  width: 60px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 100%;
}

.popup-row1 .popup-close {
  position: relative;
  top: 8px;
  right: 8px;
  width: 30px;
  height: 30px;
}

.popup-row1 .popup-close::before,
.popup-row1 .popup-close::after {
  content: "";
  position: relative;
  top: 12px;
  width: 14px;
  height: 3px;
  background-color: #12477c;
}

.popup-row1 .popup-close::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 8px;
}

.popup-row1 .popup-close::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 8px;
}

.popup-row2 {
  margin: 10px;
}

.popup-row2 h1 {
  font-size: 28px;
  font-weight: bold;
  font-family: "Roboto", sans-serif;
}

.popup-row3 {
  padding: 3px;
}

@keyframes rocket {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.popup-row3 img {
  margin-top: 20px;
  margin-bottom: 18px;
  width: 100px;
  /* transform: rotate(300deg); */
  animation-name: rocket;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  -webkit-transition: 1s ease-in;
  -moz-transition: 3s ease-in;
  -o-transition: 3s ease-in;
  transition: 3s ease-in;
}

.popup-row3 img:hover {
  transform: rotate(360deg);
  transition: 4s ease-in;
}

.popup-row4 h2 {
  margin-top: 20px;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: -20px;
}

.live-events {
  font-family: "Poppins", sans-serif;
  width: 90%;
  margin: 10px;
  margin-left: auto;
  margin-right: auto;
  padding: 8px;
  height: auto;
  background: #12477c;
  background: linear-gradient(
    90deg,
    rgba(18, 71, 124, 1) 0%,
    rgba(0, 79, 158, 1) 29%,
    #00366d 100%
  );
  color: #ffffff;
  border-radius: 6px;
  box-shadow: 0 2px 6px 0 #12477c2a, 0 3px 10px 0 rgba(0, 0, 0, 0.19);
}

.date {
  margin-left: 30px;
}

.timings {
  margin-top: 10px;
}

.time {
  padding: 20px;
}

#cta-popup1 {
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  width: 100px;
  margin-left: 40px;
  height: auto;
  background: #fff;
  color: #12477c;
  font-weight: 600;
  border: 2px solid #f7f7f7;
  border-radius: 6px;
  cursor: pointer;
}

#cta-popup {
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  width: auto;
  margin: 5px;
  padding: 8px;
  height: auto;
  background: #fff;
  color: #12477c;
  font-weight: 600;
  border: 2px solid #f7f7f7;

  border-radius: 6px;
  box-shadow: 0 2px 20px 0 #12477c2a, 0 4px 4px 0 #12477c2a;
  cursor: pointer;
}
#cta-popup:hover {
  color: #fff;
  background: #12477c;
  border: 2px solid #12477c;
}

@media screen and (max-width: 1600px) {
  .container2 {
    width: 540px;
    height: 600px;
    margin-left: 35%;
    margin-right: 50%;
    margin-top: 3%;
  }

  .popup-row2 h1 {
    font-size: 24px;
    line-height: 1.2em;
  }

  #cta {
    margin-top: 10px;
    margin: 10px;
  }

  .live-events {
    width: 90%;
  }

  .date {
    margin-left: 10px;
  }

  #cta-popup1 {
    margin-left: 0;
    margin-top: 10px;
  }
}

@media screen and (max-width: 1300px) {
  .container2 {
    width: 540px;
    height: 600px;
    margin-left: 28%;
    margin-right: 50%;
    margin-top: 8%;
  }

  .popup-row2 h1 {
    font-size: 24px;
    line-height: 1.2em;
  }

  #cta {
    margin-top: 10px;
    margin: 10px;
  }

  .live-events {
    width: 90%;
  }

  .date {
    margin-left: 10px;
  }

  #cta-popup1 {
    margin-left: 0;
    margin-top: 10px;
  }
}

@media screen and (max-width: 1000px) {
  .container2 {
    width: 540px;
    height: 600px;
    margin-left: 17%;
    margin-right: 50%;
    margin-top: 10%;
  }

  .popup-row2 h1 {
    font-size: 24px;
    line-height: 1.2em;
  }

  #cta {
    margin-top: 10px;
    margin: 10px;
  }
  .live-events {
    width: 90%;
  }

  .date {
    margin-left: 10px;
  }

  #cta-popup1 {
    margin-left: 0;
    margin-top: 10px;
  }
}

@media screen and (max-width: 750px) {
  .container2 {
    width: 380px;
    height: 620px;
    margin-left: 17%;
    margin-right: 50%;
    margin-top: 0%;
  }

  .popup-row1 img {
    width: 40px;
  }

  .popup-row2 h1 {
    font-size: 20px;
    line-height: 1.2em;
  }

  .popup-row3 img {
    width: 50px;
  }

  .live-events {
    font-size: 14px;
  }

  #cta-popup {
    margin-top: 10px;
    margin: 10px;
    width: 100px;
    height: 50px;
    font-size: 12px;
  }
}

@media screen and (max-width: 420px) {
  .container2 {
    width: 300px;
    height: 640px;
    margin-left: 13%;
    margin-right: 50%;
    margin-top: -12%;
  }

  .popup-row1 img {
    width: 40px;
  }

  .popup-row2 h1 {
    font-size: 20px;
    line-height: 1.2em;
  }

  .popup-row3 img {
    width: 50px;
  }

  .live-events {
    font-size: 14px;
  }

  #cta-popup {
    margin-top: 10px;
    margin: 10px;
    width: 100px;
    height: 50px;
    font-size: 12px;
  }
}

@media screen and (max-width: 380px) {
  .container2 {
    width: 300px;
    height: 620px;
    margin-left: 10%;
    margin-right: 50%;
    margin-top: -23%;
  }

  .popup-row1 img {
    width: 40px;
  }

  .popup-row2 h1 {
    font-size: 20px;
    line-height: 1.2em;
  }

  .popup-row3 img {
    width: 70px;
    margin-top: 0px;
    margin-bottom: 0px;
  }

  .live-events {
    font-size: 14px;
  }

  #cta-popup {
    margin-top: 10px;
    margin: 10px;
    width: 100px;
    height: 50px;
    font-size: 12px;
  }
}
</style>
