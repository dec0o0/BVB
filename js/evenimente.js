var exposedCalendar = {};
var slujbeAdaugateInLunile = []

function getKeyForMomemnt(mom) {
    return mom.year() + '' + mom.month();
}

function EvenimentLung(start, fin, titlu, locatie = null, link = null) {
    this.startDate = start;
    this.endDate = fin;
    this.title = titlu;
    this.description = locatie;
    this.link = link;
}

function EvenimentScurt(saptamanal, data, titlu, locatie = null, link = null) {
    this.saptamanal = saptamanal;
    this.date = data;
    this.title = titlu;
    this.description = locatie;
    this.link = link;
}

const EVENIMENTE_SAPTAMANALE = {
    6: [new EvenimentScurt(true, 6, "Slujbă", "10-12"), new EvenimentScurt(true, 6, "Slujbă", "16-18")],
    2: [new EvenimentScurt(true, 6, "Seară de rugăciune", "18-19:30")],
    4: [new EvenimentScurt(true, 6, "Slujbă joi seara", "18-19:30")]
}

function onDayClick(target) {
    console.log(target);
}

function generateSlujeFor(startMoment) {
    var workingMoment = moment(startMoment);
    var result = [];
    var len = workingMoment.weekday(0).daysInMonth();
    for (var i = 0; i < len; ++i) {
        var weekDay = workingMoment.weekday();
        var relevante = EVENIMENTE_SAPTAMANALE[weekDay];
        if (!_.isUndefined(relevante)) {
            _.each(relevante, function(ev) { result.push(new EvenimentScurt(ev.saptamanal, workingMoment.format('YYYY-MM-DD'), ev.title, ev.location, ev.link)); })
        }
        workingMoment.add(1, 'd');
    }
    return result;
}

function onMonthChange(target) {
    console.log(target);
    if (!target.isValid()) return;
    var key = getKeyForMomemnt(target);
    if (!_.find(slujbeAdaugateInLunile, function(itKey) { return key == itKey })) {
        var newSlujbe = generateSlujeFor(target);
        slujbeAdaugateInLunile.push(key);
        exposedCalendar.instance.addEvents(newSlujbe);
    }
}

$(document).ready(function() {

    moment.locale("ro");
    var thisMonth = moment().format("YYYY-MM");

    var eventArray = [{
        title: 'Evanghelizare',
        endDate: thisMonth + '-14',
        startDate: thisMonth + '-10',
        description: 'Pentru necredinciosi'
    }, {
        endDate: thisMonth + '-23',
        startDate: thisMonth + '-21',
        title: 'Conferinta tineret',
        description: 'Mult asteptata'
    }, {
        date: thisMonth + '-27',
        title: 'Miercuri',
        description: 'Speram ca nu va ninge'
    }, {
        date: '2018-05-27',
        title: 'Nuntă Dinu și Simona',
        description: 'Radauti'
    }, {
        date: '2018-04-17',
        title: 'Joi',
        description: 'Joy'
    }];

    exposedCalendar.instance = $('.calendarEvenimente').clndr({
        events: eventArray,
        template: $('#calendarEvenimente-template').html(),
        multiDayEvents: {
            singleDay: 'date',
            endDate: 'endDate',
            startDate: 'startDate'
        },
        showAdjacentMonths: true,
        adjacentDaysChangeMonth: true,
        forceSixRows: true,
        clickEvents: {
            click: onDayClick,
            onMonthChange: onMonthChange
        },
        constraints: {
            startDate: moment().subtract(1, 'y').format('YYYY-MM-DD'),
            endDate: moment().add(1, 'y').format('YYYY-MM-DD')
        }
    });

});