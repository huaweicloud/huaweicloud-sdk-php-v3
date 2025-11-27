<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTemplateVersionContentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTemplateVersionContentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionId  模板版本ID，以大写V开头，每次创建模板版本，模板版本ID数字部分会自增加一
    * templateId  模板的ID。当template_id存在时，模板服务会检查template_id是否和template_name匹配，不匹配会返回400
    * accessControlSourceVpcIds  允许访问资源栈模板的source vpc id列表， source vpc id应仅包含小写字母、数字或中划线。
    * accessControlSourceIps  允许访问资源栈模板的source ip列表，source ip应是具有CIDR表示法且带有子网掩码的IPv4地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientRequestId' => 'string',
            'templateName' => 'string',
            'versionId' => 'string',
            'templateId' => 'string',
            'accessControlSourceVpcIds' => 'string[]',
            'accessControlSourceIps' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionId  模板版本ID，以大写V开头，每次创建模板版本，模板版本ID数字部分会自增加一
    * templateId  模板的ID。当template_id存在时，模板服务会检查template_id是否和template_name匹配，不匹配会返回400
    * accessControlSourceVpcIds  允许访问资源栈模板的source vpc id列表， source vpc id应仅包含小写字母、数字或中划线。
    * accessControlSourceIps  允许访问资源栈模板的source ip列表，source ip应是具有CIDR表示法且带有子网掩码的IPv4地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientRequestId' => null,
        'templateName' => null,
        'versionId' => null,
        'templateId' => null,
        'accessControlSourceVpcIds' => null,
        'accessControlSourceIps' => null
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
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionId  模板版本ID，以大写V开头，每次创建模板版本，模板版本ID数字部分会自增加一
    * templateId  模板的ID。当template_id存在时，模板服务会检查template_id是否和template_name匹配，不匹配会返回400
    * accessControlSourceVpcIds  允许访问资源栈模板的source vpc id列表， source vpc id应仅包含小写字母、数字或中划线。
    * accessControlSourceIps  允许访问资源栈模板的source ip列表，source ip应是具有CIDR表示法且带有子网掩码的IPv4地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientRequestId' => 'Client-Request-Id',
            'templateName' => 'template_name',
            'versionId' => 'version_id',
            'templateId' => 'template_id',
            'accessControlSourceVpcIds' => 'access_control_source_vpc_ids',
            'accessControlSourceIps' => 'access_control_source_ips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionId  模板版本ID，以大写V开头，每次创建模板版本，模板版本ID数字部分会自增加一
    * templateId  模板的ID。当template_id存在时，模板服务会检查template_id是否和template_name匹配，不匹配会返回400
    * accessControlSourceVpcIds  允许访问资源栈模板的source vpc id列表， source vpc id应仅包含小写字母、数字或中划线。
    * accessControlSourceIps  允许访问资源栈模板的source ip列表，source ip应是具有CIDR表示法且带有子网掩码的IPv4地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'clientRequestId' => 'setClientRequestId',
            'templateName' => 'setTemplateName',
            'versionId' => 'setVersionId',
            'templateId' => 'setTemplateId',
            'accessControlSourceVpcIds' => 'setAccessControlSourceVpcIds',
            'accessControlSourceIps' => 'setAccessControlSourceIps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientRequestId  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionId  模板版本ID，以大写V开头，每次创建模板版本，模板版本ID数字部分会自增加一
    * templateId  模板的ID。当template_id存在时，模板服务会检查template_id是否和template_name匹配，不匹配会返回400
    * accessControlSourceVpcIds  允许访问资源栈模板的source vpc id列表， source vpc id应仅包含小写字母、数字或中划线。
    * accessControlSourceIps  允许访问资源栈模板的source ip列表，source ip应是具有CIDR表示法且带有子网掩码的IPv4地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'clientRequestId' => 'getClientRequestId',
            'templateName' => 'getTemplateName',
            'versionId' => 'getVersionId',
            'templateId' => 'getTemplateId',
            'accessControlSourceVpcIds' => 'getAccessControlSourceVpcIds',
            'accessControlSourceIps' => 'getAccessControlSourceIps'
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
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['accessControlSourceVpcIds'] = isset($data['accessControlSourceVpcIds']) ? $data['accessControlSourceVpcIds'] : null;
        $this->container['accessControlSourceIps'] = isset($data['accessControlSourceIps']) ? $data['accessControlSourceIps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clientRequestId'] === null) {
            $invalidProperties[] = "'clientRequestId' can't be null";
        }
            if ((mb_strlen($this->container['clientRequestId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clientRequestId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['clientRequestId']) < 36)) {
                $invalidProperties[] = "invalid value for 'clientRequestId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^[A-Za-z0-9][A-Za-z0-9-]{35,127}$/", $this->container['clientRequestId'])) {
                $invalidProperties[] = "invalid value for 'clientRequestId', must be conform to the pattern /^[A-Za-z0-9][A-Za-z0-9-]{35,127}$/.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5A-Za-z][\\u4E00-\\u9FA5A-Za-z0-9_-]{0,127}$/", $this->container['templateName'])) {
                $invalidProperties[] = "invalid value for 'templateName', must be conform to the pattern /^[\\u4E00-\\u9FA5A-Za-z][\\u4E00-\\u9FA5A-Za-z0-9_-]{0,127}$/.";
            }
        if ($this->container['versionId'] === null) {
            $invalidProperties[] = "'versionId' can't be null";
        }
            if ((mb_strlen($this->container['versionId']) > 11)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be smaller than or equal to 11.";
            }
            if ((mb_strlen($this->container['versionId']) < 2)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/^V[1-9][0-9]{0,9}$/", $this->container['versionId'])) {
                $invalidProperties[] = "invalid value for 'versionId', must be conform to the pattern /^V[1-9][0-9]{0,9}$/.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['templateId']) && !preg_match("/^[a-z0-9][a-z0-9-]{35}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^[a-z0-9][a-z0-9-]{35}$/.";
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
    * Gets clientRequestId
    *  用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    *
    * @return string
    */
    public function getClientRequestId()
    {
        return $this->container['clientRequestId'];
    }

    /**
    * Sets clientRequestId
    *
    * @param string $clientRequestId 用户指定的，对于此请求的唯一ID，用于定位某个请求，推荐使用UUID
    *
    * @return $this
    */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;
        return $this;
    }

    /**
    * Gets templateName
    *  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets versionId
    *  模板版本ID，以大写V开头，每次创建模板版本，模板版本ID数字部分会自增加一
    *
    * @return string
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string $versionId 模板版本ID，以大写V开头，每次创建模板版本，模板版本ID数字部分会自增加一
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets templateId
    *  模板的ID。当template_id存在时，模板服务会检查template_id是否和template_name匹配，不匹配会返回400
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板的ID。当template_id存在时，模板服务会检查template_id是否和template_name匹配，不匹配会返回400
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets accessControlSourceVpcIds
    *  允许访问资源栈模板的source vpc id列表， source vpc id应仅包含小写字母、数字或中划线。
    *
    * @return string[]|null
    */
    public function getAccessControlSourceVpcIds()
    {
        return $this->container['accessControlSourceVpcIds'];
    }

    /**
    * Sets accessControlSourceVpcIds
    *
    * @param string[]|null $accessControlSourceVpcIds 允许访问资源栈模板的source vpc id列表， source vpc id应仅包含小写字母、数字或中划线。
    *
    * @return $this
    */
    public function setAccessControlSourceVpcIds($accessControlSourceVpcIds)
    {
        $this->container['accessControlSourceVpcIds'] = $accessControlSourceVpcIds;
        return $this;
    }

    /**
    * Gets accessControlSourceIps
    *  允许访问资源栈模板的source ip列表，source ip应是具有CIDR表示法且带有子网掩码的IPv4地址。
    *
    * @return string[]|null
    */
    public function getAccessControlSourceIps()
    {
        return $this->container['accessControlSourceIps'];
    }

    /**
    * Sets accessControlSourceIps
    *
    * @param string[]|null $accessControlSourceIps 允许访问资源栈模板的source ip列表，source ip应是具有CIDR表示法且带有子网掩码的IPv4地址。
    *
    * @return $this
    */
    public function setAccessControlSourceIps($accessControlSourceIps)
    {
        $this->container['accessControlSourceIps'] = $accessControlSourceIps;
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

