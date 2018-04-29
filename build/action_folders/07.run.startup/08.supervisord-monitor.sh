#!/bin/bash

: ${WWW_UID:?"Environment variable 'WWW_UID' not defined in '${BASH_SOURCE[0]}'"}

nginx.updateConfig 'root' "${WWW}/public_html" default.application
