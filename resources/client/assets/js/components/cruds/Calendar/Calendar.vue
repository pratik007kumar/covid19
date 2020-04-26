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
      @dateClick="handleDateClick"
    />
  </div>
</template>

<script>
import FullCalendar from "@fullcalendar/vue";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";
export default {
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data: function() {
    return {
      calendarPlugins: [
        // plugins must be defined in the JS
        dayGridPlugin,
        timeGridPlugin,
        interactionPlugin // needed for dateClick
      ],
      calendarWeekends: true,
      calendarEvents: [
        // initial event data
        {
          title: "Arnab Tarwani - Appointment with Dr. Mason",
          date: new Date()
        },
        {
          title: "Usman Farooq - Appointment with Dr. Ray",
          date: "2020-04-03"
        },
        { title: "Max Rake - Appointment with Dr. Ray", date: "2020-04-03" },
        { title: "Tyler Newman - Appointment with Dr. Ray", date: "2020-04-23" }
      ]
    };
  }
  //   methods: {
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
