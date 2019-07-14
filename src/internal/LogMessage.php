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

namespace Comertis\Timber\Internal;

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
class LogMessage
{
    /**
     * Log message DateTime
     *
     * Format: YYYY-MM-DD HH:mm:SS
     *
     * @access private
     * @var    DateTime
     */
    private $_dateTime;

    /**
     * Log message severity
     *
     * @see LogSeverity
     *
     * @access private
     * @var    string
     */
    private $_severity;

    /**
     * Source file
     *
     * @access private
     * @var    string
     */
    private $_file;

    /**
     * Line number where the log message was created
     *
     * @access private
     * @var    integer
     */
    private $_line;

    /**
     * Log message
     *
     * @access private
     * @var    string
     */
    private $_message;

    /**
     * Get log message DateTime
     *
     * @return DateTime
     */
    public function getDateTime()
    {
        return $this->_dateTime;
    }

    /**
     * Set log message DateTime
     *
     * @param DateTime $dateTime Log message DateTime
     *
     * @return self
     */
    public function setDateTime($dateTime)
    {
        $this->_dateTime = $dateTime;

        return $this;
    }

    /**
     * Get log message severity
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->_severity;
    }

    /**
     * Set log message severity
     *
     * @param string $severity Log message severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->_severity = $severity;

        return $this;
    }

    /**
     * Get source file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->_file;
    }

    /**
     * Set source file
     *
     * @param string $file Source file
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->_file = $file;

        return $this;
    }

    /**
     * Get line number where the log message was created
     *
     * @return integer
     */
    public function getLine()
    {
        return $this->_line;
    }

    /**
     * Set line number where the log message was created
     *
     * @param integer $line Line number where the log message was created
     *
     * @return self
     */
    public function setLine($line)
    {
        $this->_line = $line;

        return $this;
    }

    /**
     * Get log message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * Set log message
     *
     * @param string $message Log message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->_message = $message;

        return $this;
    }
}
