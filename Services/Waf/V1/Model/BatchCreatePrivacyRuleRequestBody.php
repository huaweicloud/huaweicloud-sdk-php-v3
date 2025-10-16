<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreatePrivacyRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreatePrivacyRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  隐私屏蔽规则防护的url，需要填写标准的url格式，例如/admin/xxx或者/admin/_*,以\"*\"（星号）结尾代表路径前缀
    * category  屏蔽字段   - Params：请求参数   - Cookie：根据Cookie区分的Web访问者   - Header：自定义HTTP首部   - Form：表单参数
    * index  屏蔽字段名，根据“屏蔽字段”设置字段名，被屏蔽的字段将不会出现在日志中。屏蔽字段名的长度不能超过2048字节，且只能由数字、字母、下划线和中划线组成。
    * description  规则描述，可选参数，设置该规则的备注信息。
    * policyIds  策略id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'category' => 'string',
            'index' => 'string',
            'description' => 'string',
            'policyIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  隐私屏蔽规则防护的url，需要填写标准的url格式，例如/admin/xxx或者/admin/_*,以\"*\"（星号）结尾代表路径前缀
    * category  屏蔽字段   - Params：请求参数   - Cookie：根据Cookie区分的Web访问者   - Header：自定义HTTP首部   - Form：表单参数
    * index  屏蔽字段名，根据“屏蔽字段”设置字段名，被屏蔽的字段将不会出现在日志中。屏蔽字段名的长度不能超过2048字节，且只能由数字、字母、下划线和中划线组成。
    * description  规则描述，可选参数，设置该规则的备注信息。
    * policyIds  策略id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'category' => null,
        'index' => null,
        'description' => null,
        'policyIds' => null
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
    * url  隐私屏蔽规则防护的url，需要填写标准的url格式，例如/admin/xxx或者/admin/_*,以\"*\"（星号）结尾代表路径前缀
    * category  屏蔽字段   - Params：请求参数   - Cookie：根据Cookie区分的Web访问者   - Header：自定义HTTP首部   - Form：表单参数
    * index  屏蔽字段名，根据“屏蔽字段”设置字段名，被屏蔽的字段将不会出现在日志中。屏蔽字段名的长度不能超过2048字节，且只能由数字、字母、下划线和中划线组成。
    * description  规则描述，可选参数，设置该规则的备注信息。
    * policyIds  策略id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'category' => 'category',
            'index' => 'index',
            'description' => 'description',
            'policyIds' => 'policy_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  隐私屏蔽规则防护的url，需要填写标准的url格式，例如/admin/xxx或者/admin/_*,以\"*\"（星号）结尾代表路径前缀
    * category  屏蔽字段   - Params：请求参数   - Cookie：根据Cookie区分的Web访问者   - Header：自定义HTTP首部   - Form：表单参数
    * index  屏蔽字段名，根据“屏蔽字段”设置字段名，被屏蔽的字段将不会出现在日志中。屏蔽字段名的长度不能超过2048字节，且只能由数字、字母、下划线和中划线组成。
    * description  规则描述，可选参数，设置该规则的备注信息。
    * policyIds  策略id
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'category' => 'setCategory',
            'index' => 'setIndex',
            'description' => 'setDescription',
            'policyIds' => 'setPolicyIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  隐私屏蔽规则防护的url，需要填写标准的url格式，例如/admin/xxx或者/admin/_*,以\"*\"（星号）结尾代表路径前缀
    * category  屏蔽字段   - Params：请求参数   - Cookie：根据Cookie区分的Web访问者   - Header：自定义HTTP首部   - Form：表单参数
    * index  屏蔽字段名，根据“屏蔽字段”设置字段名，被屏蔽的字段将不会出现在日志中。屏蔽字段名的长度不能超过2048字节，且只能由数字、字母、下划线和中划线组成。
    * description  规则描述，可选参数，设置该规则的备注信息。
    * policyIds  策略id
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'category' => 'getCategory',
            'index' => 'getIndex',
            'description' => 'getDescription',
            'policyIds' => 'getPolicyIds'
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
    const CATEGORY_PARAMS = 'params';
    const CATEGORY_COOKIE = 'cookie';
    const CATEGORY_HEADER = 'header';
    const CATEGORY_FORM = 'form';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_PARAMS,
            self::CATEGORY_COOKIE,
            self::CATEGORY_HEADER,
            self::CATEGORY_FORM,
        ];
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyIds'] = isset($data['policyIds']) ? $data['policyIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['policyIds'] === null) {
            $invalidProperties[] = "'policyIds' can't be null";
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
    * Gets url
    *  隐私屏蔽规则防护的url，需要填写标准的url格式，例如/admin/xxx或者/admin/_*,以\"*\"（星号）结尾代表路径前缀
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 隐私屏蔽规则防护的url，需要填写标准的url格式，例如/admin/xxx或者/admin/_*,以\"*\"（星号）结尾代表路径前缀
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
    *  屏蔽字段   - Params：请求参数   - Cookie：根据Cookie区分的Web访问者   - Header：自定义HTTP首部   - Form：表单参数
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 屏蔽字段   - Params：请求参数   - Cookie：根据Cookie区分的Web访问者   - Header：自定义HTTP首部   - Form：表单参数
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets index
    *  屏蔽字段名，根据“屏蔽字段”设置字段名，被屏蔽的字段将不会出现在日志中。屏蔽字段名的长度不能超过2048字节，且只能由数字、字母、下划线和中划线组成。
    *
    * @return string
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param string $index 屏蔽字段名，根据“屏蔽字段”设置字段名，被屏蔽的字段将不会出现在日志中。屏蔽字段名的长度不能超过2048字节，且只能由数字、字母、下划线和中划线组成。
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets description
    *  规则描述，可选参数，设置该规则的备注信息。
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
    * @param string|null $description 规则描述，可选参数，设置该规则的备注信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets policyIds
    *  策略id
    *
    * @return string[]
    */
    public function getPolicyIds()
    {
        return $this->container['policyIds'];
    }

    /**
    * Sets policyIds
    *
    * @param string[] $policyIds 策略id
    *
    * @return $this
    */
    public function setPolicyIds($policyIds)
    {
        $this->container['policyIds'] = $policyIds;
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

