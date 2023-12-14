<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsistencyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsistencyResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dirCheck  校验目录
    * numTotalFiles  文件总数
    * numDifferentFiles  差异文件数量
    * numTargetMissFiles  目的端缺少文件数量
    * numTargetMoreFiles  目的端多余文件数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dirCheck' => 'string',
            'numTotalFiles' => 'int',
            'numDifferentFiles' => 'int',
            'numTargetMissFiles' => 'int',
            'numTargetMoreFiles' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dirCheck  校验目录
    * numTotalFiles  文件总数
    * numDifferentFiles  差异文件数量
    * numTargetMissFiles  目的端缺少文件数量
    * numTargetMoreFiles  目的端多余文件数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dirCheck' => null,
        'numTotalFiles' => 'int32',
        'numDifferentFiles' => 'int32',
        'numTargetMissFiles' => 'int32',
        'numTargetMoreFiles' => 'int32'
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
    * dirCheck  校验目录
    * numTotalFiles  文件总数
    * numDifferentFiles  差异文件数量
    * numTargetMissFiles  目的端缺少文件数量
    * numTargetMoreFiles  目的端多余文件数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dirCheck' => 'dir_check',
            'numTotalFiles' => 'num_total_files',
            'numDifferentFiles' => 'num_different_files',
            'numTargetMissFiles' => 'num_target_miss_files',
            'numTargetMoreFiles' => 'num_target_more_files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dirCheck  校验目录
    * numTotalFiles  文件总数
    * numDifferentFiles  差异文件数量
    * numTargetMissFiles  目的端缺少文件数量
    * numTargetMoreFiles  目的端多余文件数量
    *
    * @var string[]
    */
    protected static $setters = [
            'dirCheck' => 'setDirCheck',
            'numTotalFiles' => 'setNumTotalFiles',
            'numDifferentFiles' => 'setNumDifferentFiles',
            'numTargetMissFiles' => 'setNumTargetMissFiles',
            'numTargetMoreFiles' => 'setNumTargetMoreFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dirCheck  校验目录
    * numTotalFiles  文件总数
    * numDifferentFiles  差异文件数量
    * numTargetMissFiles  目的端缺少文件数量
    * numTargetMoreFiles  目的端多余文件数量
    *
    * @var string[]
    */
    protected static $getters = [
            'dirCheck' => 'getDirCheck',
            'numTotalFiles' => 'getNumTotalFiles',
            'numDifferentFiles' => 'getNumDifferentFiles',
            'numTargetMissFiles' => 'getNumTargetMissFiles',
            'numTargetMoreFiles' => 'getNumTargetMoreFiles'
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
        $this->container['dirCheck'] = isset($data['dirCheck']) ? $data['dirCheck'] : null;
        $this->container['numTotalFiles'] = isset($data['numTotalFiles']) ? $data['numTotalFiles'] : null;
        $this->container['numDifferentFiles'] = isset($data['numDifferentFiles']) ? $data['numDifferentFiles'] : null;
        $this->container['numTargetMissFiles'] = isset($data['numTargetMissFiles']) ? $data['numTargetMissFiles'] : null;
        $this->container['numTargetMoreFiles'] = isset($data['numTargetMoreFiles']) ? $data['numTargetMoreFiles'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dirCheck'] === null) {
            $invalidProperties[] = "'dirCheck' can't be null";
        }
            if ((mb_strlen($this->container['dirCheck']) > 1024)) {
                $invalidProperties[] = "invalid value for 'dirCheck', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['dirCheck']) < 0)) {
                $invalidProperties[] = "invalid value for 'dirCheck', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['numTotalFiles'] === null) {
            $invalidProperties[] = "'numTotalFiles' can't be null";
        }
            if (($this->container['numTotalFiles'] > 100000)) {
                $invalidProperties[] = "invalid value for 'numTotalFiles', must be smaller than or equal to 100000.";
            }
            if (($this->container['numTotalFiles'] < 0)) {
                $invalidProperties[] = "invalid value for 'numTotalFiles', must be bigger than or equal to 0.";
            }
        if ($this->container['numDifferentFiles'] === null) {
            $invalidProperties[] = "'numDifferentFiles' can't be null";
        }
            if (($this->container['numDifferentFiles'] > 100000)) {
                $invalidProperties[] = "invalid value for 'numDifferentFiles', must be smaller than or equal to 100000.";
            }
            if (($this->container['numDifferentFiles'] < 0)) {
                $invalidProperties[] = "invalid value for 'numDifferentFiles', must be bigger than or equal to 0.";
            }
        if ($this->container['numTargetMissFiles'] === null) {
            $invalidProperties[] = "'numTargetMissFiles' can't be null";
        }
            if (($this->container['numTargetMissFiles'] > 100000)) {
                $invalidProperties[] = "invalid value for 'numTargetMissFiles', must be smaller than or equal to 100000.";
            }
            if (($this->container['numTargetMissFiles'] < 0)) {
                $invalidProperties[] = "invalid value for 'numTargetMissFiles', must be bigger than or equal to 0.";
            }
        if ($this->container['numTargetMoreFiles'] === null) {
            $invalidProperties[] = "'numTargetMoreFiles' can't be null";
        }
            if (($this->container['numTargetMoreFiles'] > 100000)) {
                $invalidProperties[] = "invalid value for 'numTargetMoreFiles', must be smaller than or equal to 100000.";
            }
            if (($this->container['numTargetMoreFiles'] < 0)) {
                $invalidProperties[] = "invalid value for 'numTargetMoreFiles', must be bigger than or equal to 0.";
            }
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
    * Gets dirCheck
    *  校验目录
    *
    * @return string
    */
    public function getDirCheck()
    {
        return $this->container['dirCheck'];
    }

    /**
    * Sets dirCheck
    *
    * @param string $dirCheck 校验目录
    *
    * @return $this
    */
    public function setDirCheck($dirCheck)
    {
        $this->container['dirCheck'] = $dirCheck;
        return $this;
    }

    /**
    * Gets numTotalFiles
    *  文件总数
    *
    * @return int
    */
    public function getNumTotalFiles()
    {
        return $this->container['numTotalFiles'];
    }

    /**
    * Sets numTotalFiles
    *
    * @param int $numTotalFiles 文件总数
    *
    * @return $this
    */
    public function setNumTotalFiles($numTotalFiles)
    {
        $this->container['numTotalFiles'] = $numTotalFiles;
        return $this;
    }

    /**
    * Gets numDifferentFiles
    *  差异文件数量
    *
    * @return int
    */
    public function getNumDifferentFiles()
    {
        return $this->container['numDifferentFiles'];
    }

    /**
    * Sets numDifferentFiles
    *
    * @param int $numDifferentFiles 差异文件数量
    *
    * @return $this
    */
    public function setNumDifferentFiles($numDifferentFiles)
    {
        $this->container['numDifferentFiles'] = $numDifferentFiles;
        return $this;
    }

    /**
    * Gets numTargetMissFiles
    *  目的端缺少文件数量
    *
    * @return int
    */
    public function getNumTargetMissFiles()
    {
        return $this->container['numTargetMissFiles'];
    }

    /**
    * Sets numTargetMissFiles
    *
    * @param int $numTargetMissFiles 目的端缺少文件数量
    *
    * @return $this
    */
    public function setNumTargetMissFiles($numTargetMissFiles)
    {
        $this->container['numTargetMissFiles'] = $numTargetMissFiles;
        return $this;
    }

    /**
    * Gets numTargetMoreFiles
    *  目的端多余文件数量
    *
    * @return int
    */
    public function getNumTargetMoreFiles()
    {
        return $this->container['numTargetMoreFiles'];
    }

    /**
    * Sets numTargetMoreFiles
    *
    * @param int $numTargetMoreFiles 目的端多余文件数量
    *
    * @return $this
    */
    public function setNumTargetMoreFiles($numTargetMoreFiles)
    {
        $this->container['numTargetMoreFiles'] = $numTargetMoreFiles;
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

