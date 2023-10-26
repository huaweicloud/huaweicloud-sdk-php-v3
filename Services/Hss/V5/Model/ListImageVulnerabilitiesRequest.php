<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImageVulnerabilitiesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImageVulnerabilitiesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  region id
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数
    * imageId  镜像id
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    * namespace  组织名称
    * imageName  镜像名称
    * tagName  镜像版本名称
    * repairNecessity  危险程度，包含如下3种。   - immediate_repair ：高危。   - delay_repair ：中危。   - not_needed_repair ：低危。
    * vulId  漏洞ID（支持模糊查询）
    * appName  软件名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'enterpriseProjectId' => 'string',
            'imageType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'imageId' => 'string',
            'instanceId' => 'string',
            'namespace' => 'string',
            'imageName' => 'string',
            'tagName' => 'string',
            'repairNecessity' => 'string',
            'vulId' => 'string',
            'appName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  region id
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数
    * imageId  镜像id
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    * namespace  组织名称
    * imageName  镜像名称
    * tagName  镜像版本名称
    * repairNecessity  危险程度，包含如下3种。   - immediate_repair ：高危。   - delay_repair ：中危。   - not_needed_repair ：低危。
    * vulId  漏洞ID（支持模糊查询）
    * appName  软件名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'enterpriseProjectId' => null,
        'imageType' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'imageId' => null,
        'instanceId' => null,
        'namespace' => null,
        'imageName' => null,
        'tagName' => null,
        'repairNecessity' => null,
        'vulId' => null,
        'appName' => null
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
    * region  region id
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数
    * imageId  镜像id
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    * namespace  组织名称
    * imageName  镜像名称
    * tagName  镜像版本名称
    * repairNecessity  危险程度，包含如下3种。   - immediate_repair ：高危。   - delay_repair ：中危。   - not_needed_repair ：低危。
    * vulId  漏洞ID（支持模糊查询）
    * appName  软件名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageType' => 'image_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'imageId' => 'image_id',
            'instanceId' => 'instance_id',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'tagName' => 'tag_name',
            'repairNecessity' => 'repair_necessity',
            'vulId' => 'vul_id',
            'appName' => 'app_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  region id
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数
    * imageId  镜像id
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    * namespace  组织名称
    * imageName  镜像名称
    * tagName  镜像版本名称
    * repairNecessity  危险程度，包含如下3种。   - immediate_repair ：高危。   - delay_repair ：中危。   - not_needed_repair ：低危。
    * vulId  漏洞ID（支持模糊查询）
    * appName  软件名
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageType' => 'setImageType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'imageId' => 'setImageId',
            'instanceId' => 'setInstanceId',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'tagName' => 'setTagName',
            'repairNecessity' => 'setRepairNecessity',
            'vulId' => 'setVulId',
            'appName' => 'setAppName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  region id
    * enterpriseProjectId  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数
    * imageId  镜像id
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    * namespace  组织名称
    * imageName  镜像名称
    * tagName  镜像版本名称
    * repairNecessity  危险程度，包含如下3种。   - immediate_repair ：高危。   - delay_repair ：中危。   - not_needed_repair ：低危。
    * vulId  漏洞ID（支持模糊查询）
    * appName  软件名
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageType' => 'getImageType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'imageId' => 'getImageId',
            'instanceId' => 'getInstanceId',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'tagName' => 'getTagName',
            'repairNecessity' => 'getRepairNecessity',
            'vulId' => 'getVulId',
            'appName' => 'getAppName'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['tagName'] = isset($data['tagName']) ? $data['tagName'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.*$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['imageType'] === null) {
            $invalidProperties[] = "'imageType' can't be null";
        }
            if ((mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['imageId'] === null) {
            $invalidProperties[] = "'imageId' can't be null";
        }
            if ((mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['imageName'] === null) {
            $invalidProperties[] = "'imageName' can't be null";
        }
            if ((mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['tagName'] === null) {
            $invalidProperties[] = "'tagName' can't be null";
        }
            if ((mb_strlen($this->container['tagName']) > 64)) {
                $invalidProperties[] = "invalid value for 'tagName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tagName']) < 0)) {
                $invalidProperties[] = "invalid value for 'tagName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) > 32)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) < 0)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 64)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
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
    * Gets region
    *  region id
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region region id
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  租户企业项目ID，查询所有企业项目时填写：all_granted_eps
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
    * @param string|null $enterpriseProjectId 租户企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageType
    *  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    *
    * @return string
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string $imageType 镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像id
    *
    * @return string
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string $imageId 镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets instanceId
    *  企业仓库实例ID，swr共享版无需使用该参数
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 企业仓库实例ID，swr共享版无需使用该参数
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets namespace
    *  组织名称
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 组织名称
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets tagName
    *  镜像版本名称
    *
    * @return string
    */
    public function getTagName()
    {
        return $this->container['tagName'];
    }

    /**
    * Sets tagName
    *
    * @param string $tagName 镜像版本名称
    *
    * @return $this
    */
    public function setTagName($tagName)
    {
        $this->container['tagName'] = $tagName;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  危险程度，包含如下3种。   - immediate_repair ：高危。   - delay_repair ：中危。   - not_needed_repair ：低危。
    *
    * @return string|null
    */
    public function getRepairNecessity()
    {
        return $this->container['repairNecessity'];
    }

    /**
    * Sets repairNecessity
    *
    * @param string|null $repairNecessity 危险程度，包含如下3种。   - immediate_repair ：高危。   - delay_repair ：中危。   - not_needed_repair ：低危。
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets vulId
    *  漏洞ID（支持模糊查询）
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId 漏洞ID（支持模糊查询）
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets appName
    *  软件名
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 软件名
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
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

