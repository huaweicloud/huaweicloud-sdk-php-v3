<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoginWhiteIpResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoginWhiteIpResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  白名单启用状态, 包含如下:   - true : 已启用   - false : 已禁用
    * whiteIp  白名单IP或IP网段,IP网段由IP地址和掩码组成,以'/'连接。
    * totalNum  服务器ID总数
    * hostIdList  服务器ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'whiteIp' => 'string',
            'totalNum' => 'int',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  白名单启用状态, 包含如下:   - true : 已启用   - false : 已禁用
    * whiteIp  白名单IP或IP网段,IP网段由IP地址和掩码组成,以'/'连接。
    * totalNum  服务器ID总数
    * hostIdList  服务器ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'whiteIp' => null,
        'totalNum' => 'int32',
        'hostIdList' => null
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
    * enabled  白名单启用状态, 包含如下:   - true : 已启用   - false : 已禁用
    * whiteIp  白名单IP或IP网段,IP网段由IP地址和掩码组成,以'/'连接。
    * totalNum  服务器ID总数
    * hostIdList  服务器ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'whiteIp' => 'white_ip',
            'totalNum' => 'total_num',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  白名单启用状态, 包含如下:   - true : 已启用   - false : 已禁用
    * whiteIp  白名单IP或IP网段,IP网段由IP地址和掩码组成,以'/'连接。
    * totalNum  服务器ID总数
    * hostIdList  服务器ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'whiteIp' => 'setWhiteIp',
            'totalNum' => 'setTotalNum',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  白名单启用状态, 包含如下:   - true : 已启用   - false : 已禁用
    * whiteIp  白名单IP或IP网段,IP网段由IP地址和掩码组成,以'/'连接。
    * totalNum  服务器ID总数
    * hostIdList  服务器ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'whiteIp' => 'getWhiteIp',
            'totalNum' => 'getTotalNum',
            'hostIdList' => 'getHostIdList'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['whiteIp'] = isset($data['whiteIp']) ? $data['whiteIp'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
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
    * Gets enabled
    *  白名单启用状态, 包含如下:   - true : 已启用   - false : 已禁用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 白名单启用状态, 包含如下:   - true : 已启用   - false : 已禁用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets whiteIp
    *  白名单IP或IP网段,IP网段由IP地址和掩码组成,以'/'连接。
    *
    * @return string|null
    */
    public function getWhiteIp()
    {
        return $this->container['whiteIp'];
    }

    /**
    * Sets whiteIp
    *
    * @param string|null $whiteIp 白名单IP或IP网段,IP网段由IP地址和掩码组成,以'/'连接。
    *
    * @return $this
    */
    public function setWhiteIp($whiteIp)
    {
        $this->container['whiteIp'] = $whiteIp;
        return $this;
    }

    /**
    * Gets totalNum
    *  服务器ID总数
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
    * @param int|null $totalNum 服务器ID总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets hostIdList
    *  服务器ID列表
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 服务器ID列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

