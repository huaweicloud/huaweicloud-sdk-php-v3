<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobRespJobDetailSchemaPath implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobResp_job_detail_schema_path';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  OBS文件路径。
    * log  OBS文件导入日志存储文件。
    * status  OBS文件导入状态。  - success：完全成功 - failed：完全失败 - partFailed：部分成功
    * cause  导入失败原因。
    * totalLines  导入总行数。其值为-1时表示当前版本没有返回该字段。
    * failedLines  导入失败行数。其值为-1时表示当前版本没有返回该字段。
    * successfulLines  导入成功行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'log' => 'string',
            'status' => 'string',
            'cause' => 'string',
            'totalLines' => 'int',
            'failedLines' => 'int',
            'successfulLines' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  OBS文件路径。
    * log  OBS文件导入日志存储文件。
    * status  OBS文件导入状态。  - success：完全成功 - failed：完全失败 - partFailed：部分成功
    * cause  导入失败原因。
    * totalLines  导入总行数。其值为-1时表示当前版本没有返回该字段。
    * failedLines  导入失败行数。其值为-1时表示当前版本没有返回该字段。
    * successfulLines  导入成功行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'log' => null,
        'status' => null,
        'cause' => null,
        'totalLines' => 'int64',
        'failedLines' => 'int64',
        'successfulLines' => 'int64'
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * path  OBS文件路径。
    * log  OBS文件导入日志存储文件。
    * status  OBS文件导入状态。  - success：完全成功 - failed：完全失败 - partFailed：部分成功
    * cause  导入失败原因。
    * totalLines  导入总行数。其值为-1时表示当前版本没有返回该字段。
    * failedLines  导入失败行数。其值为-1时表示当前版本没有返回该字段。
    * successfulLines  导入成功行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'log' => 'log',
            'status' => 'status',
            'cause' => 'cause',
            'totalLines' => 'total_lines',
            'failedLines' => 'failed_lines',
            'successfulLines' => 'successful_lines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  OBS文件路径。
    * log  OBS文件导入日志存储文件。
    * status  OBS文件导入状态。  - success：完全成功 - failed：完全失败 - partFailed：部分成功
    * cause  导入失败原因。
    * totalLines  导入总行数。其值为-1时表示当前版本没有返回该字段。
    * failedLines  导入失败行数。其值为-1时表示当前版本没有返回该字段。
    * successfulLines  导入成功行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'log' => 'setLog',
            'status' => 'setStatus',
            'cause' => 'setCause',
            'totalLines' => 'setTotalLines',
            'failedLines' => 'setFailedLines',
            'successfulLines' => 'setSuccessfulLines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  OBS文件路径。
    * log  OBS文件导入日志存储文件。
    * status  OBS文件导入状态。  - success：完全成功 - failed：完全失败 - partFailed：部分成功
    * cause  导入失败原因。
    * totalLines  导入总行数。其值为-1时表示当前版本没有返回该字段。
    * failedLines  导入失败行数。其值为-1时表示当前版本没有返回该字段。
    * successfulLines  导入成功行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'log' => 'getLog',
            'status' => 'getStatus',
            'cause' => 'getCause',
            'totalLines' => 'getTotalLines',
            'failedLines' => 'getFailedLines',
            'successfulLines' => 'getSuccessfulLines'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cause'] = isset($data['cause']) ? $data['cause'] : null;
        $this->container['totalLines'] = isset($data['totalLines']) ? $data['totalLines'] : null;
        $this->container['failedLines'] = isset($data['failedLines']) ? $data['failedLines'] : null;
        $this->container['successfulLines'] = isset($data['successfulLines']) ? $data['successfulLines'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets path
    *  OBS文件路径。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path OBS文件路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets log
    *  OBS文件导入日志存储文件。
    *
    * @return string|null
    */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
    * Sets log
    *
    * @param string|null $log OBS文件导入日志存储文件。
    *
    * @return $this
    */
    public function setLog($log)
    {
        $this->container['log'] = $log;
        return $this;
    }

    /**
    * Gets status
    *  OBS文件导入状态。  - success：完全成功 - failed：完全失败 - partFailed：部分成功
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status OBS文件导入状态。  - success：完全成功 - failed：完全失败 - partFailed：部分成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets cause
    *  导入失败原因。
    *
    * @return string|null
    */
    public function getCause()
    {
        return $this->container['cause'];
    }

    /**
    * Sets cause
    *
    * @param string|null $cause 导入失败原因。
    *
    * @return $this
    */
    public function setCause($cause)
    {
        $this->container['cause'] = $cause;
        return $this;
    }

    /**
    * Gets totalLines
    *  导入总行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @return int|null
    */
    public function getTotalLines()
    {
        return $this->container['totalLines'];
    }

    /**
    * Sets totalLines
    *
    * @param int|null $totalLines 导入总行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @return $this
    */
    public function setTotalLines($totalLines)
    {
        $this->container['totalLines'] = $totalLines;
        return $this;
    }

    /**
    * Gets failedLines
    *  导入失败行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @return int|null
    */
    public function getFailedLines()
    {
        return $this->container['failedLines'];
    }

    /**
    * Sets failedLines
    *
    * @param int|null $failedLines 导入失败行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @return $this
    */
    public function setFailedLines($failedLines)
    {
        $this->container['failedLines'] = $failedLines;
        return $this;
    }

    /**
    * Gets successfulLines
    *  导入成功行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @return int|null
    */
    public function getSuccessfulLines()
    {
        return $this->container['successfulLines'];
    }

    /**
    * Sets successfulLines
    *
    * @param int|null $successfulLines 导入成功行数。其值为-1时表示当前版本没有返回该字段。
    *
    * @return $this
    */
    public function setSuccessfulLines($successfulLines)
    {
        $this->container['successfulLines'] = $successfulLines;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

