<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFunctionAppRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFunctionAppRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用名称
    * templateId  应用使用的模板ID
    * description  应用描述
    * enterpriseProjectId  企业项目ID
    * agencyName  委托名称
    * params  模板参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'templateId' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'agencyName' => 'string',
            'params' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用名称
    * templateId  应用使用的模板ID
    * description  应用描述
    * enterpriseProjectId  企业项目ID
    * agencyName  委托名称
    * params  模板参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'templateId' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'agencyName' => null,
        'params' => null
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
    * name  应用名称
    * templateId  应用使用的模板ID
    * description  应用描述
    * enterpriseProjectId  企业项目ID
    * agencyName  委托名称
    * params  模板参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'templateId' => 'template_id',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'agencyName' => 'agency_name',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用名称
    * templateId  应用使用的模板ID
    * description  应用描述
    * enterpriseProjectId  企业项目ID
    * agencyName  委托名称
    * params  模板参数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'templateId' => 'setTemplateId',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'agencyName' => 'setAgencyName',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用名称
    * templateId  应用使用的模板ID
    * description  应用描述
    * enterpriseProjectId  企业项目ID
    * agencyName  委托名称
    * params  模板参数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'templateId' => 'getTemplateId',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'agencyName' => 'getAgencyName',
            'params' => 'getParams'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
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
    *  应用名称
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
    * @param string|null $name 应用名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets templateId
    *  应用使用的模板ID
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
    * @param string|null $templateId 应用使用的模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets description
    *  应用描述
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
    * @param string|null $description 应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets params
    *  模板参数
    *
    * @return map[string,string]|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param map[string,string]|null $params 模板参数
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

