<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainFullConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainFullConfigRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  加速域名。
    * enterpriseProjectId  企业项目ID， all：所有项目。
    * showSpecialConfigs  取值为auth_key，用来查询鉴权KEY和鉴权备KEY的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'enterpriseProjectId' => 'string',
            'showSpecialConfigs' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  加速域名。
    * enterpriseProjectId  企业项目ID， all：所有项目。
    * showSpecialConfigs  取值为auth_key，用来查询鉴权KEY和鉴权备KEY的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'enterpriseProjectId' => null,
        'showSpecialConfigs' => null
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
    * domainName  加速域名。
    * enterpriseProjectId  企业项目ID， all：所有项目。
    * showSpecialConfigs  取值为auth_key，用来查询鉴权KEY和鉴权备KEY的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'showSpecialConfigs' => 'show_special_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  加速域名。
    * enterpriseProjectId  企业项目ID， all：所有项目。
    * showSpecialConfigs  取值为auth_key，用来查询鉴权KEY和鉴权备KEY的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'showSpecialConfigs' => 'setShowSpecialConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  加速域名。
    * enterpriseProjectId  企业项目ID， all：所有项目。
    * showSpecialConfigs  取值为auth_key，用来查询鉴权KEY和鉴权备KEY的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'showSpecialConfigs' => 'getShowSpecialConfigs'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['showSpecialConfigs'] = isset($data['showSpecialConfigs']) ? $data['showSpecialConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
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
    *  加速域名。
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
    * @param string $domainName 加速域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID， all：所有项目。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID， all：所有项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets showSpecialConfigs
    *  取值为auth_key，用来查询鉴权KEY和鉴权备KEY的值。
    *
    * @return string|null
    */
    public function getShowSpecialConfigs()
    {
        return $this->container['showSpecialConfigs'];
    }

    /**
    * Sets showSpecialConfigs
    *
    * @param string|null $showSpecialConfigs 取值为auth_key，用来查询鉴权KEY和鉴权备KEY的值。
    *
    * @return $this
    */
    public function setShowSpecialConfigs($showSpecialConfigs)
    {
        $this->container['showSpecialConfigs'] = $showSpecialConfigs;
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

