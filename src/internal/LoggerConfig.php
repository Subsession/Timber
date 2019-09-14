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
 * @package  Subsession\Timber
 * @author   Cristian Moraru <cristian.moraru@live.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  GIT: &Id&
 * @link     https://github.com/Subsession/Timber
 */

namespace Subsession\Timber\Internal;

/**
 * Undocumented class
 *
 * @category Logging
 * @package  Subsession\Timber
 * @author   Cristian Moraru <cristian.moraru@live.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Subsession/Timber
 */
class LoggerConfig
{
    /**
     * Log output folder
     *
     * @access private
     * @var    string
     */
    private $folder;

    /**
     * Log filename
     *
     * @access private
     * @var    string
     */
    private $fileName;

    /**
     * File should regenerate each day
     *
     * @access private
     * @var    boolean
     */
    private $rollingFile;

    /**
     * Get log output folder
     *
     * @return string
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Set log output folder
     *
     * @param string $folder Log output folder
     *
     * @return self
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Get log filename
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set log filename
     *
     * @param string $fileName Log filename
     *
     * @return self
     */
    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get file should regenerate each day
     *
     * @return boolean
     */
    public function getRollingFile()
    {
        return $this->rollingFile;
    }

    /**
     * Set file should regenerate each day
     *
     * @param boolean $rollingFile File should regenerate each day
     *
     * @return self
     */
    public function setRollingFile(boolean $rollingFile)
    {
        $this->rollingFile = $rollingFile;

        return $this;
    }
}
