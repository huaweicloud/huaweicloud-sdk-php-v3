<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModClusterProtectionEventRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModClusterProtectionEventRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  总数
    * opr  操作类型 ignore 忽略 handle 处理 addWhiteImage 加白
    * dataList  事件ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'opr' => 'string',
            'dataList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  总数
    * opr  操作类型 ignore 忽略 handle 处理 addWhiteImage 加白
    * dataList  事件ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'opr' => null,
        'dataList' => null
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
    * totalNum  总数
    * opr  操作类型 ignore 忽略 handle 处理 addWhiteImage 加白
    * dataList  事件ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'opr' => 'opr',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  总数
    * opr  操作类型 ignore 忽略 handle 处理 addWhiteImage 加白
    * dataList  事件ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'opr' => 'setOpr',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  总数
    * opr  操作类型 ignore 忽略 handle 处理 addWhiteImage 加白
    * dataList  事件ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'opr' => 'getOpr',
            'dataList' => 'getDataList'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['opr'] = isset($data['opr']) ? $data['opr'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['totalNum'] === null) {
            $invalidProperties[] = "'totalNum' can't be null";
        }
            if (($this->container['totalNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 10000.";
            }
            if (($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
        if ($this->container['opr'] === null) {
            $invalidProperties[] = "'opr' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['opr'])) {
                $invalidProperties[] = "invalid value for 'opr', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['dataList'] === null) {
            $invalidProperties[] = "'dataList' can't be null";
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
    * Gets totalNum
    *  总数
    *
    * @return int
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int $totalNum 总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets opr
    *  操作类型 ignore 忽略 handle 处理 addWhiteImage 加白
    *
    * @return string
    */
    public function getOpr()
    {
        return $this->container['opr'];
    }

    /**
    * Sets opr
    *
    * @param string $opr 操作类型 ignore 忽略 handle 处理 addWhiteImage 加白
    *
    * @return $this
    */
    public function setOpr($opr)
    {
        $this->container['opr'] = $opr;
        return $this;
    }

    /**
    * Gets dataList
    *  事件ID列表
    *
    * @return string[]
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param string[] $dataList 事件ID列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

