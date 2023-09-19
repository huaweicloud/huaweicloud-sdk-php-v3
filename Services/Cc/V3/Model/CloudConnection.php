<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudConnection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云连接实例的ID。
    * name  云连接实例的名字。
    * description  云连接实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  云连接实例的企业项目ID。
    * status  云连接实例的状态。ACTIVE：表示状态可用。
    * adminStateUp  云连接实例的管理状态。
    * createdAt  云连接实例的创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  云连接实例的更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * usedScene  云连接使用场景。 - VPC：虚拟私有云。
    * tags  标签列表。
    * networkInstanceNumber  云连接实例关联网络实例的个数。
    * bandwidthPackageNumber  云连接实例关联带宽包的个数。
    * interRegionBandwidthNumber  云连接实例关联域间带宽的个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'enterpriseProjectId' => 'string',
            'status' => 'string',
            'adminStateUp' => 'bool',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'usedScene' => 'string',
            'tags' => '\HuaweiCloud\SDK\Cc\V3\Model\Tag[]',
            'networkInstanceNumber' => 'int',
            'bandwidthPackageNumber' => 'int',
            'interRegionBandwidthNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云连接实例的ID。
    * name  云连接实例的名字。
    * description  云连接实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  云连接实例的企业项目ID。
    * status  云连接实例的状态。ACTIVE：表示状态可用。
    * adminStateUp  云连接实例的管理状态。
    * createdAt  云连接实例的创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  云连接实例的更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * usedScene  云连接使用场景。 - VPC：虚拟私有云。
    * tags  标签列表。
    * networkInstanceNumber  云连接实例关联网络实例的个数。
    * bandwidthPackageNumber  云连接实例关联带宽包的个数。
    * interRegionBandwidthNumber  云连接实例关联域间带宽的个数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'enterpriseProjectId' => null,
        'status' => null,
        'adminStateUp' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'usedScene' => null,
        'tags' => null,
        'networkInstanceNumber' => 'int32',
        'bandwidthPackageNumber' => 'int32',
        'interRegionBandwidthNumber' => 'int32'
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
    * id  云连接实例的ID。
    * name  云连接实例的名字。
    * description  云连接实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  云连接实例的企业项目ID。
    * status  云连接实例的状态。ACTIVE：表示状态可用。
    * adminStateUp  云连接实例的管理状态。
    * createdAt  云连接实例的创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  云连接实例的更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * usedScene  云连接使用场景。 - VPC：虚拟私有云。
    * tags  标签列表。
    * networkInstanceNumber  云连接实例关联网络实例的个数。
    * bandwidthPackageNumber  云连接实例关联带宽包的个数。
    * interRegionBandwidthNumber  云连接实例关联域间带宽的个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'status' => 'status',
            'adminStateUp' => 'admin_state_up',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'usedScene' => 'used_scene',
            'tags' => 'tags',
            'networkInstanceNumber' => 'network_instance_number',
            'bandwidthPackageNumber' => 'bandwidth_package_number',
            'interRegionBandwidthNumber' => 'inter_region_bandwidth_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云连接实例的ID。
    * name  云连接实例的名字。
    * description  云连接实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  云连接实例的企业项目ID。
    * status  云连接实例的状态。ACTIVE：表示状态可用。
    * adminStateUp  云连接实例的管理状态。
    * createdAt  云连接实例的创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  云连接实例的更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * usedScene  云连接使用场景。 - VPC：虚拟私有云。
    * tags  标签列表。
    * networkInstanceNumber  云连接实例关联网络实例的个数。
    * bandwidthPackageNumber  云连接实例关联带宽包的个数。
    * interRegionBandwidthNumber  云连接实例关联域间带宽的个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'status' => 'setStatus',
            'adminStateUp' => 'setAdminStateUp',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'usedScene' => 'setUsedScene',
            'tags' => 'setTags',
            'networkInstanceNumber' => 'setNetworkInstanceNumber',
            'bandwidthPackageNumber' => 'setBandwidthPackageNumber',
            'interRegionBandwidthNumber' => 'setInterRegionBandwidthNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云连接实例的ID。
    * name  云连接实例的名字。
    * description  云连接实例的描述。
    * domainId  帐号ID。
    * enterpriseProjectId  云连接实例的企业项目ID。
    * status  云连接实例的状态。ACTIVE：表示状态可用。
    * adminStateUp  云连接实例的管理状态。
    * createdAt  云连接实例的创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  云连接实例的更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * usedScene  云连接使用场景。 - VPC：虚拟私有云。
    * tags  标签列表。
    * networkInstanceNumber  云连接实例关联网络实例的个数。
    * bandwidthPackageNumber  云连接实例关联带宽包的个数。
    * interRegionBandwidthNumber  云连接实例关联域间带宽的个数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'status' => 'getStatus',
            'adminStateUp' => 'getAdminStateUp',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'usedScene' => 'getUsedScene',
            'tags' => 'getTags',
            'networkInstanceNumber' => 'getNetworkInstanceNumber',
            'bandwidthPackageNumber' => 'getBandwidthPackageNumber',
            'interRegionBandwidthNumber' => 'getInterRegionBandwidthNumber'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const USED_SCENE_VPC = 'vpc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUsedSceneAllowableValues()
    {
        return [
            self::USED_SCENE_VPC,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['usedScene'] = isset($data['usedScene']) ? $data['usedScene'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['networkInstanceNumber'] = isset($data['networkInstanceNumber']) ? $data['networkInstanceNumber'] : null;
        $this->container['bandwidthPackageNumber'] = isset($data['bandwidthPackageNumber']) ? $data['bandwidthPackageNumber'] : null;
        $this->container['interRegionBandwidthNumber'] = isset($data['interRegionBandwidthNumber']) ? $data['interRegionBandwidthNumber'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getUsedSceneAllowableValues();
                if (!is_null($this->container['usedScene']) && !in_array($this->container['usedScene'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'usedScene', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['usedScene']) && (mb_strlen($this->container['usedScene']) > 36)) {
                $invalidProperties[] = "invalid value for 'usedScene', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['usedScene']) && (mb_strlen($this->container['usedScene']) < 0)) {
                $invalidProperties[] = "invalid value for 'usedScene', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['networkInstanceNumber']) && ($this->container['networkInstanceNumber'] >= 10000)) {
                $invalidProperties[] = "invalid value for 'networkInstanceNumber', must be smaller than 10000.";
            }
            if (!is_null($this->container['networkInstanceNumber']) && ($this->container['networkInstanceNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'networkInstanceNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidthPackageNumber']) && ($this->container['bandwidthPackageNumber'] >= 10000)) {
                $invalidProperties[] = "invalid value for 'bandwidthPackageNumber', must be smaller than 10000.";
            }
            if (!is_null($this->container['bandwidthPackageNumber']) && ($this->container['bandwidthPackageNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthPackageNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['interRegionBandwidthNumber']) && ($this->container['interRegionBandwidthNumber'] >= 10000)) {
                $invalidProperties[] = "invalid value for 'interRegionBandwidthNumber', must be smaller than 10000.";
            }
            if (!is_null($this->container['interRegionBandwidthNumber']) && ($this->container['interRegionBandwidthNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'interRegionBandwidthNumber', must be bigger than or equal to 0.";
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
    * Gets id
    *  云连接实例的ID。
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
    * @param string|null $id 云连接实例的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  云连接实例的名字。
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
    * @param string|null $name 云连接实例的名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  云连接实例的描述。
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
    * @param string|null $description 云连接实例的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  帐号ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 帐号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  云连接实例的企业项目ID。
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
    * @param string|null $enterpriseProjectId 云连接实例的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets status
    *  云连接实例的状态。ACTIVE：表示状态可用。
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
    * @param string|null $status 云连接实例的状态。ACTIVE：表示状态可用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  云连接实例的管理状态。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 云连接实例的管理状态。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets createdAt
    *  云连接实例的创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 云连接实例的创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  云连接实例的更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 云连接实例的更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets usedScene
    *  云连接使用场景。 - VPC：虚拟私有云。
    *
    * @return string|null
    */
    public function getUsedScene()
    {
        return $this->container['usedScene'];
    }

    /**
    * Sets usedScene
    *
    * @param string|null $usedScene 云连接使用场景。 - VPC：虚拟私有云。
    *
    * @return $this
    */
    public function setUsedScene($usedScene)
    {
        $this->container['usedScene'] = $usedScene;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null $tags 标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets networkInstanceNumber
    *  云连接实例关联网络实例的个数。
    *
    * @return int|null
    */
    public function getNetworkInstanceNumber()
    {
        return $this->container['networkInstanceNumber'];
    }

    /**
    * Sets networkInstanceNumber
    *
    * @param int|null $networkInstanceNumber 云连接实例关联网络实例的个数。
    *
    * @return $this
    */
    public function setNetworkInstanceNumber($networkInstanceNumber)
    {
        $this->container['networkInstanceNumber'] = $networkInstanceNumber;
        return $this;
    }

    /**
    * Gets bandwidthPackageNumber
    *  云连接实例关联带宽包的个数。
    *
    * @return int|null
    */
    public function getBandwidthPackageNumber()
    {
        return $this->container['bandwidthPackageNumber'];
    }

    /**
    * Sets bandwidthPackageNumber
    *
    * @param int|null $bandwidthPackageNumber 云连接实例关联带宽包的个数。
    *
    * @return $this
    */
    public function setBandwidthPackageNumber($bandwidthPackageNumber)
    {
        $this->container['bandwidthPackageNumber'] = $bandwidthPackageNumber;
        return $this;
    }

    /**
    * Gets interRegionBandwidthNumber
    *  云连接实例关联域间带宽的个数。
    *
    * @return int|null
    */
    public function getInterRegionBandwidthNumber()
    {
        return $this->container['interRegionBandwidthNumber'];
    }

    /**
    * Sets interRegionBandwidthNumber
    *
    * @param int|null $interRegionBandwidthNumber 云连接实例关联域间带宽的个数。
    *
    * @return $this
    */
    public function setInterRegionBandwidthNumber($interRegionBandwidthNumber)
    {
        $this->container['interRegionBandwidthNumber'] = $interRegionBandwidthNumber;
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

