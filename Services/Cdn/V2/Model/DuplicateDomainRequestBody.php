<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DuplicateDomainRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DuplicateDomainRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * referenceDomainName  **参数解释：** 存量加速域名，将该域名的配置复制给新添加的域名。  **约束限制：** 已经在CDN添加成功的域名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainName  **参数解释：** 需要添加到CDN控制台加速的域名 > 添加泛域名后，该泛域名所有次级域名均默认接入CDN加速。  **约束限制：** 加速域名不允许重复添加 **取值范围：** - 域名长度不能超过200个字符 - 支持大小写字母、数字、\"-\"、\".\"，首尾字符不能是\"-\"或\".\" - 泛域名场景下支持\"*\"，且\"*\"必须为首字符 - 域名单节点长度不超过63个字符，即：xxx.xxx.com中，xxx的字符数不超过63个字符  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'referenceDomainName' => 'string',
            'domainName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * referenceDomainName  **参数解释：** 存量加速域名，将该域名的配置复制给新添加的域名。  **约束限制：** 已经在CDN添加成功的域名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainName  **参数解释：** 需要添加到CDN控制台加速的域名 > 添加泛域名后，该泛域名所有次级域名均默认接入CDN加速。  **约束限制：** 加速域名不允许重复添加 **取值范围：** - 域名长度不能超过200个字符 - 支持大小写字母、数字、\"-\"、\".\"，首尾字符不能是\"-\"或\".\" - 泛域名场景下支持\"*\"，且\"*\"必须为首字符 - 域名单节点长度不超过63个字符，即：xxx.xxx.com中，xxx的字符数不超过63个字符  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'referenceDomainName' => null,
        'domainName' => null
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
    * referenceDomainName  **参数解释：** 存量加速域名，将该域名的配置复制给新添加的域名。  **约束限制：** 已经在CDN添加成功的域名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainName  **参数解释：** 需要添加到CDN控制台加速的域名 > 添加泛域名后，该泛域名所有次级域名均默认接入CDN加速。  **约束限制：** 加速域名不允许重复添加 **取值范围：** - 域名长度不能超过200个字符 - 支持大小写字母、数字、\"-\"、\".\"，首尾字符不能是\"-\"或\".\" - 泛域名场景下支持\"*\"，且\"*\"必须为首字符 - 域名单节点长度不超过63个字符，即：xxx.xxx.com中，xxx的字符数不超过63个字符  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'referenceDomainName' => 'reference_domain_name',
            'domainName' => 'domain_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * referenceDomainName  **参数解释：** 存量加速域名，将该域名的配置复制给新添加的域名。  **约束限制：** 已经在CDN添加成功的域名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainName  **参数解释：** 需要添加到CDN控制台加速的域名 > 添加泛域名后，该泛域名所有次级域名均默认接入CDN加速。  **约束限制：** 加速域名不允许重复添加 **取值范围：** - 域名长度不能超过200个字符 - 支持大小写字母、数字、\"-\"、\".\"，首尾字符不能是\"-\"或\".\" - 泛域名场景下支持\"*\"，且\"*\"必须为首字符 - 域名单节点长度不超过63个字符，即：xxx.xxx.com中，xxx的字符数不超过63个字符  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'referenceDomainName' => 'setReferenceDomainName',
            'domainName' => 'setDomainName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * referenceDomainName  **参数解释：** 存量加速域名，将该域名的配置复制给新添加的域名。  **约束限制：** 已经在CDN添加成功的域名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domainName  **参数解释：** 需要添加到CDN控制台加速的域名 > 添加泛域名后，该泛域名所有次级域名均默认接入CDN加速。  **约束限制：** 加速域名不允许重复添加 **取值范围：** - 域名长度不能超过200个字符 - 支持大小写字母、数字、\"-\"、\".\"，首尾字符不能是\"-\"或\".\" - 泛域名场景下支持\"*\"，且\"*\"必须为首字符 - 域名单节点长度不超过63个字符，即：xxx.xxx.com中，xxx的字符数不超过63个字符  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'referenceDomainName' => 'getReferenceDomainName',
            'domainName' => 'getDomainName'
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
        $this->container['referenceDomainName'] = isset($data['referenceDomainName']) ? $data['referenceDomainName'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['referenceDomainName'] === null) {
            $invalidProperties[] = "'referenceDomainName' can't be null";
        }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
            if ((mb_strlen($this->container['domainName']) > 200)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 200.";
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
    * Gets referenceDomainName
    *  **参数解释：** 存量加速域名，将该域名的配置复制给新添加的域名。  **约束限制：** 已经在CDN添加成功的域名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getReferenceDomainName()
    {
        return $this->container['referenceDomainName'];
    }

    /**
    * Sets referenceDomainName
    *
    * @param string $referenceDomainName **参数解释：** 存量加速域名，将该域名的配置复制给新添加的域名。  **约束限制：** 已经在CDN添加成功的域名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setReferenceDomainName($referenceDomainName)
    {
        $this->container['referenceDomainName'] = $referenceDomainName;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释：** 需要添加到CDN控制台加速的域名 > 添加泛域名后，该泛域名所有次级域名均默认接入CDN加速。  **约束限制：** 加速域名不允许重复添加 **取值范围：** - 域名长度不能超过200个字符 - 支持大小写字母、数字、\"-\"、\".\"，首尾字符不能是\"-\"或\".\" - 泛域名场景下支持\"*\"，且\"*\"必须为首字符 - 域名单节点长度不超过63个字符，即：xxx.xxx.com中，xxx的字符数不超过63个字符  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName **参数解释：** 需要添加到CDN控制台加速的域名 > 添加泛域名后，该泛域名所有次级域名均默认接入CDN加速。  **约束限制：** 加速域名不允许重复添加 **取值范围：** - 域名长度不能超过200个字符 - 支持大小写字母、数字、\"-\"、\".\"，首尾字符不能是\"-\"或\".\" - 泛域名场景下支持\"*\"，且\"*\"必须为首字符 - 域名单节点长度不超过63个字符，即：xxx.xxx.com中，xxx的字符数不超过63个字符  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
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

