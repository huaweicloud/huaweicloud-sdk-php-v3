<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAgentStatisticsStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAgentStatisticsStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * online  主机Agent在线数
    * offline  主机Agent离线数
    * notInstalled  未安装主机Agent的主机数
    * totalNum  主机总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'online' => 'int',
            'offline' => 'int',
            'notInstalled' => 'int',
            'totalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * online  主机Agent在线数
    * offline  主机Agent离线数
    * notInstalled  未安装主机Agent的主机数
    * totalNum  主机总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'online' => null,
        'offline' => null,
        'notInstalled' => null,
        'totalNum' => null
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
    * online  主机Agent在线数
    * offline  主机Agent离线数
    * notInstalled  未安装主机Agent的主机数
    * totalNum  主机总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'online' => 'online',
            'offline' => 'offline',
            'notInstalled' => 'not_installed',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * online  主机Agent在线数
    * offline  主机Agent离线数
    * notInstalled  未安装主机Agent的主机数
    * totalNum  主机总数
    *
    * @var string[]
    */
    protected static $setters = [
            'online' => 'setOnline',
            'offline' => 'setOffline',
            'notInstalled' => 'setNotInstalled',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * online  主机Agent在线数
    * offline  主机Agent离线数
    * notInstalled  未安装主机Agent的主机数
    * totalNum  主机总数
    *
    * @var string[]
    */
    protected static $getters = [
            'online' => 'getOnline',
            'offline' => 'getOffline',
            'notInstalled' => 'getNotInstalled',
            'totalNum' => 'getTotalNum'
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
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['offline'] = isset($data['offline']) ? $data['offline'] : null;
        $this->container['notInstalled'] = isset($data['notInstalled']) ? $data['notInstalled'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
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
    * Gets online
    *  主机Agent在线数
    *
    * @return int|null
    */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
    * Sets online
    *
    * @param int|null $online 主机Agent在线数
    *
    * @return $this
    */
    public function setOnline($online)
    {
        $this->container['online'] = $online;
        return $this;
    }

    /**
    * Gets offline
    *  主机Agent离线数
    *
    * @return int|null
    */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
    * Sets offline
    *
    * @param int|null $offline 主机Agent离线数
    *
    * @return $this
    */
    public function setOffline($offline)
    {
        $this->container['offline'] = $offline;
        return $this;
    }

    /**
    * Gets notInstalled
    *  未安装主机Agent的主机数
    *
    * @return int|null
    */
    public function getNotInstalled()
    {
        return $this->container['notInstalled'];
    }

    /**
    * Sets notInstalled
    *
    * @param int|null $notInstalled 未安装主机Agent的主机数
    *
    * @return $this
    */
    public function setNotInstalled($notInstalled)
    {
        $this->container['notInstalled'] = $notInstalled;
        return $this;
    }

    /**
    * Gets totalNum
    *  主机总数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 主机总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
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

