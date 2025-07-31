<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOsStatisticsInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOsStatisticsInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * winNum  win_num
    * linuxNum  linux_num
    * osList  操作系统统计数据列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'winNum' => 'int',
            'linuxNum' => 'int',
            'osList' => '\HuaweiCloud\SDK\Hss\V5\Model\OsStatisticsInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * winNum  win_num
    * linuxNum  linux_num
    * osList  操作系统统计数据列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'winNum' => null,
        'linuxNum' => null,
        'osList' => null
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
    * winNum  win_num
    * linuxNum  linux_num
    * osList  操作系统统计数据列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'winNum' => 'win_num',
            'linuxNum' => 'linux_num',
            'osList' => 'os_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * winNum  win_num
    * linuxNum  linux_num
    * osList  操作系统统计数据列表
    *
    * @var string[]
    */
    protected static $setters = [
            'winNum' => 'setWinNum',
            'linuxNum' => 'setLinuxNum',
            'osList' => 'setOsList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * winNum  win_num
    * linuxNum  linux_num
    * osList  操作系统统计数据列表
    *
    * @var string[]
    */
    protected static $getters = [
            'winNum' => 'getWinNum',
            'linuxNum' => 'getLinuxNum',
            'osList' => 'getOsList'
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
        $this->container['winNum'] = isset($data['winNum']) ? $data['winNum'] : null;
        $this->container['linuxNum'] = isset($data['linuxNum']) ? $data['linuxNum'] : null;
        $this->container['osList'] = isset($data['osList']) ? $data['osList'] : null;
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
    * Gets winNum
    *  win_num
    *
    * @return int|null
    */
    public function getWinNum()
    {
        return $this->container['winNum'];
    }

    /**
    * Sets winNum
    *
    * @param int|null $winNum win_num
    *
    * @return $this
    */
    public function setWinNum($winNum)
    {
        $this->container['winNum'] = $winNum;
        return $this;
    }

    /**
    * Gets linuxNum
    *  linux_num
    *
    * @return int|null
    */
    public function getLinuxNum()
    {
        return $this->container['linuxNum'];
    }

    /**
    * Sets linuxNum
    *
    * @param int|null $linuxNum linux_num
    *
    * @return $this
    */
    public function setLinuxNum($linuxNum)
    {
        $this->container['linuxNum'] = $linuxNum;
        return $this;
    }

    /**
    * Gets osList
    *  操作系统统计数据列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OsStatisticsInfo[]|null
    */
    public function getOsList()
    {
        return $this->container['osList'];
    }

    /**
    * Sets osList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OsStatisticsInfo[]|null $osList 操作系统统计数据列表
    *
    * @return $this
    */
    public function setOsList($osList)
    {
        $this->container['osList'] = $osList;
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

