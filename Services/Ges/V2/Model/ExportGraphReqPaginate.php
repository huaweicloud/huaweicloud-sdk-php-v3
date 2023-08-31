<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportGraphReqPaginate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportGraphReq_paginate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  是否开启分页，默认为true，不需要开启分页时，需显示声明为false。
    * rowCountPerFile  按页导出时，每个文件最大行数，默认10000000。
    * numThread  按页导出时，并行线程数，默认为8。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'rowCountPerFile' => 'int',
            'numThread' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  是否开启分页，默认为true，不需要开启分页时，需显示声明为false。
    * rowCountPerFile  按页导出时，每个文件最大行数，默认10000000。
    * numThread  按页导出时，并行线程数，默认为8。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'rowCountPerFile' => 'int32',
        'numThread' => 'int32'
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
    * enable  是否开启分页，默认为true，不需要开启分页时，需显示声明为false。
    * rowCountPerFile  按页导出时，每个文件最大行数，默认10000000。
    * numThread  按页导出时，并行线程数，默认为8。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'rowCountPerFile' => 'row_count_per_file',
            'numThread' => 'num_thread'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  是否开启分页，默认为true，不需要开启分页时，需显示声明为false。
    * rowCountPerFile  按页导出时，每个文件最大行数，默认10000000。
    * numThread  按页导出时，并行线程数，默认为8。
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'rowCountPerFile' => 'setRowCountPerFile',
            'numThread' => 'setNumThread'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  是否开启分页，默认为true，不需要开启分页时，需显示声明为false。
    * rowCountPerFile  按页导出时，每个文件最大行数，默认10000000。
    * numThread  按页导出时，并行线程数，默认为8。
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'rowCountPerFile' => 'getRowCountPerFile',
            'numThread' => 'getNumThread'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['rowCountPerFile'] = isset($data['rowCountPerFile']) ? $data['rowCountPerFile'] : null;
        $this->container['numThread'] = isset($data['numThread']) ? $data['numThread'] : null;
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
    * Gets enable
    *  是否开启分页，默认为true，不需要开启分页时，需显示声明为false。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否开启分页，默认为true，不需要开启分页时，需显示声明为false。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets rowCountPerFile
    *  按页导出时，每个文件最大行数，默认10000000。
    *
    * @return int|null
    */
    public function getRowCountPerFile()
    {
        return $this->container['rowCountPerFile'];
    }

    /**
    * Sets rowCountPerFile
    *
    * @param int|null $rowCountPerFile 按页导出时，每个文件最大行数，默认10000000。
    *
    * @return $this
    */
    public function setRowCountPerFile($rowCountPerFile)
    {
        $this->container['rowCountPerFile'] = $rowCountPerFile;
        return $this;
    }

    /**
    * Gets numThread
    *  按页导出时，并行线程数，默认为8。
    *
    * @return int|null
    */
    public function getNumThread()
    {
        return $this->container['numThread'];
    }

    /**
    * Sets numThread
    *
    * @param int|null $numThread 按页导出时，并行线程数，默认为8。
    *
    * @return $this
    */
    public function setNumThread($numThread)
    {
        $this->container['numThread'] = $numThread;
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

