<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LeakageListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LeakageListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则id
    * policyid  策略id
    * policyname  策略名称
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * timestamp  创建规则时间戳
    * status  **参数解释：** 规则状态标识，用于指定规则的启用或关闭状态 **约束限制：** 不涉及 **取值范围：**  - 0：关闭  - 1：开启 **默认取值：** 不涉及
    * description  规则描述
    * action  action
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'policyid' => 'string',
            'policyname' => 'string',
            'url' => 'string',
            'category' => 'string',
            'contents' => 'string[]',
            'timestamp' => 'int',
            'status' => 'int',
            'description' => 'string',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\LeakageListInfoAction'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则id
    * policyid  策略id
    * policyname  策略名称
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * timestamp  创建规则时间戳
    * status  **参数解释：** 规则状态标识，用于指定规则的启用或关闭状态 **约束限制：** 不涉及 **取值范围：**  - 0：关闭  - 1：开启 **默认取值：** 不涉及
    * description  规则描述
    * action  action
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'policyid' => null,
        'policyname' => null,
        'url' => null,
        'category' => null,
        'contents' => null,
        'timestamp' => 'int64',
        'status' => null,
        'description' => null,
        'action' => null
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
    * id  规则id
    * policyid  策略id
    * policyname  策略名称
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * timestamp  创建规则时间戳
    * status  **参数解释：** 规则状态标识，用于指定规则的启用或关闭状态 **约束限制：** 不涉及 **取值范围：**  - 0：关闭  - 1：开启 **默认取值：** 不涉及
    * description  规则描述
    * action  action
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'policyid' => 'policyid',
            'policyname' => 'policyname',
            'url' => 'url',
            'category' => 'category',
            'contents' => 'contents',
            'timestamp' => 'timestamp',
            'status' => 'status',
            'description' => 'description',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则id
    * policyid  策略id
    * policyname  策略名称
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * timestamp  创建规则时间戳
    * status  **参数解释：** 规则状态标识，用于指定规则的启用或关闭状态 **约束限制：** 不涉及 **取值范围：**  - 0：关闭  - 1：开启 **默认取值：** 不涉及
    * description  规则描述
    * action  action
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'policyid' => 'setPolicyid',
            'policyname' => 'setPolicyname',
            'url' => 'setUrl',
            'category' => 'setCategory',
            'contents' => 'setContents',
            'timestamp' => 'setTimestamp',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则id
    * policyid  策略id
    * policyname  策略名称
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * timestamp  创建规则时间戳
    * status  **参数解释：** 规则状态标识，用于指定规则的启用或关闭状态 **约束限制：** 不涉及 **取值范围：**  - 0：关闭  - 1：开启 **默认取值：** 不涉及
    * description  规则描述
    * action  action
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'policyid' => 'getPolicyid',
            'policyname' => 'getPolicyname',
            'url' => 'getUrl',
            'category' => 'getCategory',
            'contents' => 'getContents',
            'timestamp' => 'getTimestamp',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'action' => 'getAction'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['policyname'] = isset($data['policyname']) ? $data['policyname'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
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
    * Gets id
    *  规则id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 规则id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets policyid
    *  策略id
    *
    * @return string|null
    */
    public function getPolicyid()
    {
        return $this->container['policyid'];
    }

    /**
    * Sets policyid
    *
    * @param string|null $policyid 策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets policyname
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyname()
    {
        return $this->container['policyname'];
    }

    /**
    * Sets policyname
    *
    * @param string|null $policyname 策略名称
    *
    * @return $this
    */
    public function setPolicyname($policyname)
    {
        $this->container['policyname'] = $policyname;
        return $this;
    }

    /**
    * Gets url
    *  规则应用的url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 规则应用的url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets category
    *  类别（响应码：code，敏感信息：sensitive）
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 类别（响应码：code，敏感信息：sensitive）
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets contents
    *  规则内容
    *
    * @return string[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param string[]|null $contents 规则内容
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets timestamp
    *  创建规则时间戳
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 创建规则时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 规则状态标识，用于指定规则的启用或关闭状态 **约束限制：** 不涉及 **取值范围：**  - 0：关闭  - 1：开启 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 规则状态标识，用于指定规则的启用或关闭状态 **约束限制：** 不涉及 **取值范围：**  - 0：关闭  - 1：开启 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LeakageListInfoAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LeakageListInfoAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

