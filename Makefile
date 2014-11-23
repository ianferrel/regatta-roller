medical-log.zip:
	cd ..; zip -r medical-log.zip medical-log
	mv ../medical-log.zip .

clean:
	rm -vf *~ medical-log.zip

