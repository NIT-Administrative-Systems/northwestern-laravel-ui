
import * as Sentry from '@sentry/browser';
import { BrowserTracing } from "@sentry/tracing";
window.BrowserTracing = BrowserTracing;
window.Sentry = Sentry;