<template>
  <div class="demo-app">
    <FullCalendar
      class="demo-app-calendar"
      ref="fullCalendar"
      defaultView="dayGridMonth"
      :header="{
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      }"
      :plugins="calendarPlugins"
      :weekends="calendarWeekends"
      :events="calendarEvents"
    />
  </div>
</template>

<script>
import FullCalendar from "@fullcalendar/vue";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";
import * as store from "../.././../store/modules/Appointments/index";
import { mapGetters, mapActions } from "vuex";

export default {
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data() {
    // console.log(data);
    return {
      calendarPlugins: [
        // plugins must be defined in the JS
        dayGridPlugin,
        timeGridPlugin,
        interactionPlugin // needed for dateClick
      ],
      calendarWeekends: true,
      calendarEvents: [
        {
          title:
            "Appointment at 10:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-12 12:10:00",
          end: "2020-04-12 1:10:00",
          id: 1
        },
        {
          title:
            "Appointment at 11:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-13 11:10:00",
          end: "2020-04-13 12:10:00",
          id: 2
        },
        {
          title:
            "Appointment at 9:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-14 09:10:00",
          end: "2020-04-14 10:10:00",
          id: 3
        },
        {
          title:
            "Appointment at 3:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-21 03:10:00",
          end: "2020-04-21 04:10:00",
          id: 4
        },
        {
          title:
            "Appointment at 2:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-25 02:10:00",
          end: "2020-04-25 04:10:00",
          id: 5
        },
        {
          title:
            "Appointment at 10:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-15 10:10:00",
          end: "2020-04-15 11:10:00",
          id: 6
        },
        {
          title:
            "Appointment at 11:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-19 11:10:00",
          end: "2020-04-19 12:10:00",
          id: 7
        },
        {
          title:
            "Appointment at 9:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-01 09:10:00",
          end: "2020-04-01 10:10:00",
          id: 8
        },
        {
          title:
            "Appointment at 3:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-02 03:10:00",
          end: "2020-04-02 04:10:00",
          id: 9
        },
        {
          title:
            "Appointment at 2:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-03 02:10:00",
          end: "2020-04-03 04:10:00",
          id: 10
        },
        {
          title:
            "Appointment at 10:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-04 10:10:00",
          end: "2020-04-04 11:10:00",
          id: 11
        },
        {
          title:
            "Appointment at 11:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-15 11:10:00",
          end: "2020-04-15 12:10:00",
          id: 12
        },
        {
          title:
            "Appointment at 9:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-18 09:10:00",
          end: "2020-04-18 10:10:00",
          id: 13
        },
        {
          title:
            "Appointment at 3:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-21 03:10:00",
          end: "2020-04-21 04:10:00",
          id: 14
        },
        {
          title:
            "Appointment at 2:10 pm https://www.gotomeet.me/empeal Access Code: 324-135-941",
          start: "2020-04-25 02:10:00",
          end: "2020-04-25 04:10:00",
          id: 15
        }
      ]
    };
  },
  created() {
    this.fetchData();
    console.log(this.dataObject);
  },
  destroyed() {
    this.resetState();
  },
  computed: {
    ...mapGetters("AppointmentsIndex", ["dataObject"])
  },
  methods: {
    ...mapActions("AppointmentsIndex", ["fetchData", "setQuery", "resetState"])
  }

  //     toggleWeekends() {
  //       this.calendarWeekends = !this.calendarWeekends; // update a property
  //     },
  //     gotoPast() {
  //       let calendarApi = this.$refs.fullCalendar.getApi(); // from the ref="..."
  //       calendarApi.gotoDate("2000-01-01"); // call a method on the Calendar object
  //     },
  //     handleDateClick(arg) {
  //       if (confirm("Would you like to add an event to " + arg.dateStr + " ?")) {
  //         this.calendarEvents.push({
  //           // add new event data
  //           title: "New Event",
  //           start: arg.date,
  //           allDay: arg.allDay
  //         });
  //       }
  //     }
  //   }
};
</script>

<style lang='scss'>
// you must include each plugins' css
// paths prefixed with ~ signify node_modules
@import "~@fullcalendar/core/main.css";
@import "~@fullcalendar/daygrid/main.css";
@import "~@fullcalendar/timegrid/main.css";
.demo-app {
  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  font-size: 14px;
}
.demo-app-top {
  margin: 0 0 3em;
}
.demo-app-calendar {
  margin: 0 auto;
  max-width: 1800px;
}
</style>
