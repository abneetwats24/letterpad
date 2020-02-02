#!/bin/bash
echo "Content-type: text/html"
echo
#echo "Hello, World!"
#echo ${CONTENT_TYPE}
[ -z "$QUERY_STRING_POST" \
      -a "$REQUEST_METHOD" = "POST" -a ! -z "$CONTENT_LENGTH" ] && \
	read -n $CONTENT_LENGTH QUERY_STRING_POST
#echo $QUERY_STRING_POST
cd ../storage/
tesseract cover_images/$QUERY_STRING_POST tess/output --psm 6 -l eng
cat tess/output.txt


