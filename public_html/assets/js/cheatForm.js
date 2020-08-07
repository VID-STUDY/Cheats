if (!String.prototype.format) {
    String.prototype.format = function() {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function(match, number) {
            return typeof args[number] != 'undefined'
                ? args[number]
                : match
                ;
        });
    };
}

class Durations {
    static counter = parseInt($('#duration-counter').html());
    static htmlTemplate = $('#duration-template').html();
    static container = $('#durationsContainer');

    static bind() {
        $('#addDurationButton').on('click', Durations.addDuration);
        $('.delete-duration-button').on('click', Durations.deleteDuration);
    }

    static deleteDuration(event) {
        $(`#${$(event.target).data('target-id')}`).remove();
    }

    static addDuration() {
        Durations.counter++;
        let durationItemString = Durations.htmlTemplate.format(Durations.counter);
        let durationItemHtml = $(durationItemString);
        durationItemHtml.find('.delete-duration-button').on('click', Durations.deleteDuration);
        Durations.container.append(durationItemHtml);
    }
}

class Features {
    static counter = parseInt($('#feature-counter').html());
    static htmlTemplate = $('#feature-template').html();
    static container = $('#featuresContainer');

    static bind() {
        $('#addFeatureButton').on('click', Features.addDuration);
        $('.delete-feature-button').on('click', Features.deleteDuration);
    }

    static deleteDuration(event) {
        $(`#${$(event.target).data('target-id')}`).remove();
    }

    static addDuration() {
        Features.counter++;
        let featureItemString = Features.htmlTemplate.format(Features.counter);
        let featureItemHtml = $(featureItemString);
        featureItemHtml.find('.delete-feature-button').on('click', Features.deleteDuration);
        Features.container.append(featureItemHtml);
    }
}

$(document).ready(function () {
    Durations.bind();
    Features.bind();
});
