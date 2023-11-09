<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SignApiBindingBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SignApiBindingBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishId  API的发布编号
    * apiId  API编号
    * groupName  API所属分组的名称
    * bindingTime  绑定时间
    * envId  API所属环境的编号
    * envName  API所属环境的名称
    * apiType  API类型
    * apiName  API名称
    * id  绑定关系的ID
    * apiRemark  API描述
    * signId  签名密钥的编号
    * signName  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishId' => 'string',
            'apiId' => 'string',
            'groupName' => 'string',
            'bindingTime' => '\DateTime',
            'envId' => 'string',
            'envName' => 'string',
            'apiType' => 'int',
            'apiName' => 'string',
            'id' => 'string',
            'apiRemark' => 'string',
            'signId' => 'string',
            'signName' => 'string',
            'reqMethod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishId  API的发布编号
    * apiId  API编号
    * groupName  API所属分组的名称
    * bindingTime  绑定时间
    * envId  API所属环境的编号
    * envName  API所属环境的名称
    * apiType  API类型
    * apiName  API名称
    * id  绑定关系的ID
    * apiRemark  API描述
    * signId  签名密钥的编号
    * signName  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishId' => null,
        'apiId' => null,
        'groupName' => null,
        'bindingTime' => 'date-time',
        'envId' => null,
        'envName' => null,
        'apiType' => 'int32',
        'apiName' => null,
        'id' => null,
        'apiRemark' => null,
        'signId' => null,
        'signName' => null,
        'reqMethod' => null
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
    * publishId  API的发布编号
    * apiId  API编号
    * groupName  API所属分组的名称
    * bindingTime  绑定时间
    * envId  API所属环境的编号
    * envName  API所属环境的名称
    * apiType  API类型
    * apiName  API名称
    * id  绑定关系的ID
    * apiRemark  API描述
    * signId  签名密钥的编号
    * signName  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishId' => 'publish_id',
            'apiId' => 'api_id',
            'groupName' => 'group_name',
            'bindingTime' => 'binding_time',
            'envId' => 'env_id',
            'envName' => 'env_name',
            'apiType' => 'api_type',
            'apiName' => 'api_name',
            'id' => 'id',
            'apiRemark' => 'api_remark',
            'signId' => 'sign_id',
            'signName' => 'sign_name',
            'reqMethod' => 'req_method'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishId  API的发布编号
    * apiId  API编号
    * groupName  API所属分组的名称
    * bindingTime  绑定时间
    * envId  API所属环境的编号
    * envName  API所属环境的名称
    * apiType  API类型
    * apiName  API名称
    * id  绑定关系的ID
    * apiRemark  API描述
    * signId  签名密钥的编号
    * signName  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $setters = [
            'publishId' => 'setPublishId',
            'apiId' => 'setApiId',
            'groupName' => 'setGroupName',
            'bindingTime' => 'setBindingTime',
            'envId' => 'setEnvId',
            'envName' => 'setEnvName',
            'apiType' => 'setApiType',
            'apiName' => 'setApiName',
            'id' => 'setId',
            'apiRemark' => 'setApiRemark',
            'signId' => 'setSignId',
            'signName' => 'setSignName',
            'reqMethod' => 'setReqMethod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishId  API的发布编号
    * apiId  API编号
    * groupName  API所属分组的名称
    * bindingTime  绑定时间
    * envId  API所属环境的编号
    * envName  API所属环境的名称
    * apiType  API类型
    * apiName  API名称
    * id  绑定关系的ID
    * apiRemark  API描述
    * signId  签名密钥的编号
    * signName  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $getters = [
            'publishId' => 'getPublishId',
            'apiId' => 'getApiId',
            'groupName' => 'getGroupName',
            'bindingTime' => 'getBindingTime',
            'envId' => 'getEnvId',
            'envName' => 'getEnvName',
            'apiType' => 'getApiType',
            'apiName' => 'getApiName',
            'id' => 'getId',
            'apiRemark' => 'getApiRemark',
            'signId' => 'getSignId',
            'signName' => 'getSignName',
            'reqMethod' => 'getReqMethod'
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
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqMethodAllowableValues()
    {
        return [
            self::REQ_METHOD_GET,
            self::REQ_METHOD_POST,
            self::REQ_METHOD_DELETE,
            self::REQ_METHOD_PUT,
            self::REQ_METHOD_PATCH,
            self::REQ_METHOD_HEAD,
            self::REQ_METHOD_OPTIONS,
            self::REQ_METHOD_ANY,
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
        $this->container['publishId'] = isset($data['publishId']) ? $data['publishId'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['bindingTime'] = isset($data['bindingTime']) ? $data['bindingTime'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['apiType'] = isset($data['apiType']) ? $data['apiType'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['apiRemark'] = isset($data['apiRemark']) ? $data['apiRemark'] : null;
        $this->container['signId'] = isset($data['signId']) ? $data['signId'] : null;
        $this->container['signName'] = isset($data['signName']) ? $data['signName'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets publishId
    *  API的发布编号
    *
    * @return string|null
    */
    public function getPublishId()
    {
        return $this->container['publishId'];
    }

    /**
    * Sets publishId
    *
    * @param string|null $publishId API的发布编号
    *
    * @return $this
    */
    public function setPublishId($publishId)
    {
        $this->container['publishId'] = $publishId;
        return $this;
    }

    /**
    * Gets apiId
    *  API编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId API编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets groupName
    *  API所属分组的名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName API所属分组的名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets bindingTime
    *  绑定时间
    *
    * @return \DateTime|null
    */
    public function getBindingTime()
    {
        return $this->container['bindingTime'];
    }

    /**
    * Sets bindingTime
    *
    * @param \DateTime|null $bindingTime 绑定时间
    *
    * @return $this
    */
    public function setBindingTime($bindingTime)
    {
        $this->container['bindingTime'] = $bindingTime;
        return $this;
    }

    /**
    * Gets envId
    *  API所属环境的编号
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId API所属环境的编号
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets envName
    *  API所属环境的名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName API所属环境的名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets apiType
    *  API类型
    *
    * @return int|null
    */
    public function getApiType()
    {
        return $this->container['apiType'];
    }

    /**
    * Sets apiType
    *
    * @param int|null $apiType API类型
    *
    * @return $this
    */
    public function setApiType($apiType)
    {
        $this->container['apiType'] = $apiType;
        return $this;
    }

    /**
    * Gets apiName
    *  API名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName API名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets id
    *  绑定关系的ID
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
    * @param string|null $id 绑定关系的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets apiRemark
    *  API描述
    *
    * @return string|null
    */
    public function getApiRemark()
    {
        return $this->container['apiRemark'];
    }

    /**
    * Sets apiRemark
    *
    * @param string|null $apiRemark API描述
    *
    * @return $this
    */
    public function setApiRemark($apiRemark)
    {
        $this->container['apiRemark'] = $apiRemark;
        return $this;
    }

    /**
    * Gets signId
    *  签名密钥的编号
    *
    * @return string|null
    */
    public function getSignId()
    {
        return $this->container['signId'];
    }

    /**
    * Sets signId
    *
    * @param string|null $signId 签名密钥的编号
    *
    * @return $this
    */
    public function setSignId($signId)
    {
        $this->container['signId'] = $signId;
        return $this;
    }

    /**
    * Gets signName
    *  签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getSignName()
    {
        return $this->container['signName'];
    }

    /**
    * Sets signName
    *
    * @param string|null $signName 签名密钥的名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setSignName($signName)
    {
        $this->container['signName'] = $signName;
        return $this;
    }

    /**
    * Gets reqMethod
    *  API请求方法
    *
    * @return string|null
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string|null $reqMethod API请求方法
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
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

