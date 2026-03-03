<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeployCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeployCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectName  部署的资源所在的项目名称，若在主项目下，则该值为region id。
    * serviceName  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    * resources  所要部署的资源列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectName' => 'string',
            'serviceName' => 'string',
            'resources' => '\HuaweiCloud\SDK\Scm\V3\Model\DeployedResource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectName  部署的资源所在的项目名称，若在主项目下，则该值为region id。
    * serviceName  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    * resources  所要部署的资源列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectName' => null,
        'serviceName' => null,
        'resources' => null
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
    * projectName  部署的资源所在的项目名称，若在主项目下，则该值为region id。
    * serviceName  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    * resources  所要部署的资源列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectName' => 'project_name',
            'serviceName' => 'service_name',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectName  部署的资源所在的项目名称，若在主项目下，则该值为region id。
    * serviceName  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    * resources  所要部署的资源列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectName' => 'setProjectName',
            'serviceName' => 'setServiceName',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectName  部署的资源所在的项目名称，若在主项目下，则该值为region id。
    * serviceName  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    * resources  所要部署的资源列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectName' => 'getProjectName',
            'serviceName' => 'getServiceName',
            'resources' => 'getResources'
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
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['serviceName'] === null) {
            $invalidProperties[] = "'serviceName' can't be null";
        }
            if ((mb_strlen($this->container['serviceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
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
    * Gets projectName
    *  部署的资源所在的项目名称，若在主项目下，则该值为region id。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 部署的资源所在的项目名称，若在主项目下，则该值为region id。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets serviceName
    *  证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @return string
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string $serviceName 证书推送的目标服务，当前仅支持：CDN、WAF、ELB。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets resources
    *  所要部署的资源列表。
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\DeployedResource[]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\DeployedResource[] $resources 所要部署的资源列表。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

