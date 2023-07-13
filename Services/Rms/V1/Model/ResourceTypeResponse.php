<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceTypeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceTypeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  资源类型名称
    * displayName  资源类型显示名称，可以通过请求中 'X-Language'设置语言
    * global  是否是全局类型的资源
    * regions  支持的region列表
    * consoleEndpointId  console终端id
    * consoleListUrl  console列表页地址
    * consoleDetailUrl  console详情页地址
    * track  资源是否默认收集，\"tracked\"表示默认收集，\"untracked\"表示默认不收集
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'displayName' => 'string',
            'global' => 'bool',
            'regions' => 'string[]',
            'consoleEndpointId' => 'string',
            'consoleListUrl' => 'string',
            'consoleDetailUrl' => 'string',
            'track' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  资源类型名称
    * displayName  资源类型显示名称，可以通过请求中 'X-Language'设置语言
    * global  是否是全局类型的资源
    * regions  支持的region列表
    * consoleEndpointId  console终端id
    * consoleListUrl  console列表页地址
    * consoleDetailUrl  console详情页地址
    * track  资源是否默认收集，\"tracked\"表示默认收集，\"untracked\"表示默认不收集
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'displayName' => null,
        'global' => null,
        'regions' => null,
        'consoleEndpointId' => null,
        'consoleListUrl' => null,
        'consoleDetailUrl' => null,
        'track' => null
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
    * name  资源类型名称
    * displayName  资源类型显示名称，可以通过请求中 'X-Language'设置语言
    * global  是否是全局类型的资源
    * regions  支持的region列表
    * consoleEndpointId  console终端id
    * consoleListUrl  console列表页地址
    * consoleDetailUrl  console详情页地址
    * track  资源是否默认收集，\"tracked\"表示默认收集，\"untracked\"表示默认不收集
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'displayName' => 'display_name',
            'global' => 'global',
            'regions' => 'regions',
            'consoleEndpointId' => 'console_endpoint_id',
            'consoleListUrl' => 'console_list_url',
            'consoleDetailUrl' => 'console_detail_url',
            'track' => 'track'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  资源类型名称
    * displayName  资源类型显示名称，可以通过请求中 'X-Language'设置语言
    * global  是否是全局类型的资源
    * regions  支持的region列表
    * consoleEndpointId  console终端id
    * consoleListUrl  console列表页地址
    * consoleDetailUrl  console详情页地址
    * track  资源是否默认收集，\"tracked\"表示默认收集，\"untracked\"表示默认不收集
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'global' => 'setGlobal',
            'regions' => 'setRegions',
            'consoleEndpointId' => 'setConsoleEndpointId',
            'consoleListUrl' => 'setConsoleListUrl',
            'consoleDetailUrl' => 'setConsoleDetailUrl',
            'track' => 'setTrack'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  资源类型名称
    * displayName  资源类型显示名称，可以通过请求中 'X-Language'设置语言
    * global  是否是全局类型的资源
    * regions  支持的region列表
    * consoleEndpointId  console终端id
    * consoleListUrl  console列表页地址
    * consoleDetailUrl  console详情页地址
    * track  资源是否默认收集，\"tracked\"表示默认收集，\"untracked\"表示默认不收集
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'global' => 'getGlobal',
            'regions' => 'getRegions',
            'consoleEndpointId' => 'getConsoleEndpointId',
            'consoleListUrl' => 'getConsoleListUrl',
            'consoleDetailUrl' => 'getConsoleDetailUrl',
            'track' => 'getTrack'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['global'] = isset($data['global']) ? $data['global'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['consoleEndpointId'] = isset($data['consoleEndpointId']) ? $data['consoleEndpointId'] : null;
        $this->container['consoleListUrl'] = isset($data['consoleListUrl']) ? $data['consoleListUrl'] : null;
        $this->container['consoleDetailUrl'] = isset($data['consoleDetailUrl']) ? $data['consoleDetailUrl'] : null;
        $this->container['track'] = isset($data['track']) ? $data['track'] : null;
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
    * Gets name
    *  资源类型名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 资源类型名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  资源类型显示名称，可以通过请求中 'X-Language'设置语言
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 资源类型显示名称，可以通过请求中 'X-Language'设置语言
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets global
    *  是否是全局类型的资源
    *
    * @return bool|null
    */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
    * Sets global
    *
    * @param bool|null $global 是否是全局类型的资源
    *
    * @return $this
    */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;
        return $this;
    }

    /**
    * Gets regions
    *  支持的region列表
    *
    * @return string[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param string[]|null $regions 支持的region列表
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets consoleEndpointId
    *  console终端id
    *
    * @return string|null
    */
    public function getConsoleEndpointId()
    {
        return $this->container['consoleEndpointId'];
    }

    /**
    * Sets consoleEndpointId
    *
    * @param string|null $consoleEndpointId console终端id
    *
    * @return $this
    */
    public function setConsoleEndpointId($consoleEndpointId)
    {
        $this->container['consoleEndpointId'] = $consoleEndpointId;
        return $this;
    }

    /**
    * Gets consoleListUrl
    *  console列表页地址
    *
    * @return string|null
    */
    public function getConsoleListUrl()
    {
        return $this->container['consoleListUrl'];
    }

    /**
    * Sets consoleListUrl
    *
    * @param string|null $consoleListUrl console列表页地址
    *
    * @return $this
    */
    public function setConsoleListUrl($consoleListUrl)
    {
        $this->container['consoleListUrl'] = $consoleListUrl;
        return $this;
    }

    /**
    * Gets consoleDetailUrl
    *  console详情页地址
    *
    * @return string|null
    */
    public function getConsoleDetailUrl()
    {
        return $this->container['consoleDetailUrl'];
    }

    /**
    * Sets consoleDetailUrl
    *
    * @param string|null $consoleDetailUrl console详情页地址
    *
    * @return $this
    */
    public function setConsoleDetailUrl($consoleDetailUrl)
    {
        $this->container['consoleDetailUrl'] = $consoleDetailUrl;
        return $this;
    }

    /**
    * Gets track
    *  资源是否默认收集，\"tracked\"表示默认收集，\"untracked\"表示默认不收集
    *
    * @return string|null
    */
    public function getTrack()
    {
        return $this->container['track'];
    }

    /**
    * Sets track
    *
    * @param string|null $track 资源是否默认收集，\"tracked\"表示默认收集，\"untracked\"表示默认不收集
    *
    * @return $this
    */
    public function setTrack($track)
    {
        $this->container['track'] = $track;
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

