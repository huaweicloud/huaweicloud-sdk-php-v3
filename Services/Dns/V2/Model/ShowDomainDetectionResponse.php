<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainDetectionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainDetectionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  待诊断记录集的名称。
    * type  待诊断记录集的类型。 取值范围：CNAME、TXT、MX。
    * status  域名诊断状态。  取值范围：  OK：解析成功 FAILED：whois查询失败 NOT_REGISTERED：通过whois查询，域名未注册 CANNOT_RESOLVE：通过whois查询，域名无法解析 NOT_HWDNS：未托管在华为云 NO_WEBSITE_RECORD：未配置网站解析记录 NO_EMAIL_RECORD：未配置邮箱解析记录 NO_DEFAULT_VIEW：未配置默认解析 NOT_EFFECT：权威服务器未生效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'type' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  待诊断记录集的名称。
    * type  待诊断记录集的类型。 取值范围：CNAME、TXT、MX。
    * status  域名诊断状态。  取值范围：  OK：解析成功 FAILED：whois查询失败 NOT_REGISTERED：通过whois查询，域名未注册 CANNOT_RESOLVE：通过whois查询，域名无法解析 NOT_HWDNS：未托管在华为云 NO_WEBSITE_RECORD：未配置网站解析记录 NO_EMAIL_RECORD：未配置邮箱解析记录 NO_DEFAULT_VIEW：未配置默认解析 NOT_EFFECT：权威服务器未生效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'type' => null,
        'status' => null
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
    * domainName  待诊断记录集的名称。
    * type  待诊断记录集的类型。 取值范围：CNAME、TXT、MX。
    * status  域名诊断状态。  取值范围：  OK：解析成功 FAILED：whois查询失败 NOT_REGISTERED：通过whois查询，域名未注册 CANNOT_RESOLVE：通过whois查询，域名无法解析 NOT_HWDNS：未托管在华为云 NO_WEBSITE_RECORD：未配置网站解析记录 NO_EMAIL_RECORD：未配置邮箱解析记录 NO_DEFAULT_VIEW：未配置默认解析 NOT_EFFECT：权威服务器未生效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'type' => 'type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  待诊断记录集的名称。
    * type  待诊断记录集的类型。 取值范围：CNAME、TXT、MX。
    * status  域名诊断状态。  取值范围：  OK：解析成功 FAILED：whois查询失败 NOT_REGISTERED：通过whois查询，域名未注册 CANNOT_RESOLVE：通过whois查询，域名无法解析 NOT_HWDNS：未托管在华为云 NO_WEBSITE_RECORD：未配置网站解析记录 NO_EMAIL_RECORD：未配置邮箱解析记录 NO_DEFAULT_VIEW：未配置默认解析 NOT_EFFECT：权威服务器未生效
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'type' => 'setType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  待诊断记录集的名称。
    * type  待诊断记录集的类型。 取值范围：CNAME、TXT、MX。
    * status  域名诊断状态。  取值范围：  OK：解析成功 FAILED：whois查询失败 NOT_REGISTERED：通过whois查询，域名未注册 CANNOT_RESOLVE：通过whois查询，域名无法解析 NOT_HWDNS：未托管在华为云 NO_WEBSITE_RECORD：未配置网站解析记录 NO_EMAIL_RECORD：未配置邮箱解析记录 NO_DEFAULT_VIEW：未配置默认解析 NOT_EFFECT：权威服务器未生效
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'type' => 'getType',
            'status' => 'getStatus'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
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
    * Gets domainName
    *  待诊断记录集的名称。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 待诊断记录集的名称。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets type
    *  待诊断记录集的类型。 取值范围：CNAME、TXT、MX。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 待诊断记录集的类型。 取值范围：CNAME、TXT、MX。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  域名诊断状态。  取值范围：  OK：解析成功 FAILED：whois查询失败 NOT_REGISTERED：通过whois查询，域名未注册 CANNOT_RESOLVE：通过whois查询，域名无法解析 NOT_HWDNS：未托管在华为云 NO_WEBSITE_RECORD：未配置网站解析记录 NO_EMAIL_RECORD：未配置邮箱解析记录 NO_DEFAULT_VIEW：未配置默认解析 NOT_EFFECT：权威服务器未生效
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 域名诊断状态。  取值范围：  OK：解析成功 FAILED：whois查询失败 NOT_REGISTERED：通过whois查询，域名未注册 CANNOT_RESOLVE：通过whois查询，域名无法解析 NOT_HWDNS：未托管在华为云 NO_WEBSITE_RECORD：未配置网站解析记录 NO_EMAIL_RECORD：未配置邮箱解析记录 NO_DEFAULT_VIEW：未配置默认解析 NOT_EFFECT：权威服务器未生效
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

