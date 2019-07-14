<?php
/**
 * PHP Version 7
 *
 * LICENSE:
 * Permission is hereby granted, free of charge, to any
 * person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the
 * Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall
 * be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * @category Logging
 * @package  Comertis\Timber
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  GIT: &Id&
 * @link     https://github.com/Comertis/Timber
 */

namespace Comertis\Timber;

use Comertis\Timber\LogSeverity;

/**
 * Undocumented class
 *
 * @category Logging
 * @package  Comertis\Timber
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Comertis/Timber
 */
class Logger
{
    /**
     * Log a message with TRACE severity
     *
     * @param string $message Log message
     *
     * @see LogSeverity::TRACE
     *
     * @access public
     * @return void
     */
    public function logTrace($message)
    {
        return $this->log(LogSeverity::TRACE, $message);
    }

    /**
     * Log a message with DEBUG severity
     *
     * @param string $message Log message
     *
     * @see LogSeverity::DEBUG
     *
     * @access public
     * @return void
     */
    public function logDebug($message)
    {
        return $this->log(LogSeverity::DEBUG, $message);
    }

    /**
     * Log a message with INFO severity
     *
     * @param string $message Log message
     *
     * @see LogSeverity::INFO
     *
     * @access public
     * @return void
     */
    public function logInfo($message)
    {
        return $this->log(LogSeverity::INFO, $message);
    }

    /**
     * Log a message with WARNING severity
     *
     * @param string $message Log message
     *
     * @see LogSeverity::WARNING
     *
     * @access public
     * @return void
     */
    public function logWarning($message)
    {
        return $this->log(LogSeverity::WARNING, $message);
    }

    /**
     * Log a message with ERROR severity
     *
     * @param string $message Log message
     *
     * @see LogSeverity::ERROR
     *
     * @access public
     * @return void
     */
    public function logError($message)
    {
        return $this->log(LogSeverity::ERROR, $message);
    }

    /**
     * Log a message with FATAL severity
     *
     * @param string $message Log message
     *
     * @see LogSeverity::FATAL
     *
     * @access public
     * @return void
     */
    public function logFatal($message)
    {
        return $this->log(LogSeverity::FATAL, $message);
    }

    /**
     * Log a message
     *
     * @param string $logSeverity Log severity
     * @param string $message     Log message
     *
     * @see LogSeverity
     *
     * @access public
     * @return void
     */
    public function log($logSeverity, $message)
    {

    }
}
