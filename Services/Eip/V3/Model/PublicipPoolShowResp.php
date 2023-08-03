<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicipPoolShowResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicipPoolShowResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  公网IP池id
    * name  公网IP池名字
    * status  状态
    * type  取值, spec_bgp(专属离散动态), spec_sbgp(专属离散静态)
    * description  描述
    * projectId  租户id
    * size  池子大小
    * used  已经使用的ip数量
    * createdAt  公网IP池创建时间
    * updatedAt  公网IP池更新时间
    * billingInfo  billingInfo
    * publicBorderGroup  功能说明：中心还是边缘。公网IP池取值为center
    * shared  功能说明：是否共享
    * isCommon  功能说明：是否公共池
    * tags  默认不显示。用户标签
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * allowShareBandwidthTypes  功能说明：表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该           publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'type' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'size' => 'int',
            'used' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'billingInfo' => '\HuaweiCloud\SDK\Eip\V3\Model\BillingInfoDict',
            'publicBorderGroup' => 'string',
            'shared' => 'bool',
            'isCommon' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Eip\V3\Model\TagsInfo[]',
            'enterpriseProjectId' => 'string',
            'allowShareBandwidthTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  公网IP池id
    * name  公网IP池名字
    * status  状态
    * type  取值, spec_bgp(专属离散动态), spec_sbgp(专属离散静态)
    * description  描述
    * projectId  租户id
    * size  池子大小
    * used  已经使用的ip数量
    * createdAt  公网IP池创建时间
    * updatedAt  公网IP池更新时间
    * billingInfo  billingInfo
    * publicBorderGroup  功能说明：中心还是边缘。公网IP池取值为center
    * shared  功能说明：是否共享
    * isCommon  功能说明：是否公共池
    * tags  默认不显示。用户标签
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * allowShareBandwidthTypes  功能说明：表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该           publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'type' => null,
        'description' => null,
        'projectId' => null,
        'size' => null,
        'used' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'billingInfo' => null,
        'publicBorderGroup' => null,
        'shared' => null,
        'isCommon' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'allowShareBandwidthTypes' => null
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
    * id  公网IP池id
    * name  公网IP池名字
    * status  状态
    * type  取值, spec_bgp(专属离散动态), spec_sbgp(专属离散静态)
    * description  描述
    * projectId  租户id
    * size  池子大小
    * used  已经使用的ip数量
    * createdAt  公网IP池创建时间
    * updatedAt  公网IP池更新时间
    * billingInfo  billingInfo
    * publicBorderGroup  功能说明：中心还是边缘。公网IP池取值为center
    * shared  功能说明：是否共享
    * isCommon  功能说明：是否公共池
    * tags  默认不显示。用户标签
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * allowShareBandwidthTypes  功能说明：表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该           publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'type' => 'type',
            'description' => 'description',
            'projectId' => 'project_id',
            'size' => 'size',
            'used' => 'used',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'billingInfo' => 'billing_info',
            'publicBorderGroup' => 'public_border_group',
            'shared' => 'shared',
            'isCommon' => 'is_common',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'allowShareBandwidthTypes' => 'allow_share_bandwidth_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  公网IP池id
    * name  公网IP池名字
    * status  状态
    * type  取值, spec_bgp(专属离散动态), spec_sbgp(专属离散静态)
    * description  描述
    * projectId  租户id
    * size  池子大小
    * used  已经使用的ip数量
    * createdAt  公网IP池创建时间
    * updatedAt  公网IP池更新时间
    * billingInfo  billingInfo
    * publicBorderGroup  功能说明：中心还是边缘。公网IP池取值为center
    * shared  功能说明：是否共享
    * isCommon  功能说明：是否公共池
    * tags  默认不显示。用户标签
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * allowShareBandwidthTypes  功能说明：表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该           publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'type' => 'setType',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'size' => 'setSize',
            'used' => 'setUsed',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'billingInfo' => 'setBillingInfo',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'shared' => 'setShared',
            'isCommon' => 'setIsCommon',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'allowShareBandwidthTypes' => 'setAllowShareBandwidthTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  公网IP池id
    * name  公网IP池名字
    * status  状态
    * type  取值, spec_bgp(专属离散动态), spec_sbgp(专属离散静态)
    * description  描述
    * projectId  租户id
    * size  池子大小
    * used  已经使用的ip数量
    * createdAt  公网IP池创建时间
    * updatedAt  公网IP池更新时间
    * billingInfo  billingInfo
    * publicBorderGroup  功能说明：中心还是边缘。公网IP池取值为center
    * shared  功能说明：是否共享
    * isCommon  功能说明：是否公共池
    * tags  默认不显示。用户标签
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * allowShareBandwidthTypes  功能说明：表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该           publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'type' => 'getType',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'size' => 'getSize',
            'used' => 'getUsed',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'billingInfo' => 'getBillingInfo',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'shared' => 'getShared',
            'isCommon' => 'getIsCommon',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'allowShareBandwidthTypes' => 'getAllowShareBandwidthTypes'
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
    const TYPE_SPEC_BGP = 'spec_bgp';
    const TYPE_SPEC_SBGP = 'spec_sbgp';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SPEC_BGP,
            self::TYPE_SPEC_SBGP,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['isCommon'] = isset($data['isCommon']) ? $data['isCommon'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['allowShareBandwidthTypes'] = isset($data['allowShareBandwidthTypes']) ? $data['allowShareBandwidthTypes'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 999999)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['used']) && ($this->container['used'] > 999999)) {
                $invalidProperties[] = "invalid value for 'used', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['used']) && ($this->container['used'] < 0)) {
                $invalidProperties[] = "invalid value for 'used', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    *  公网IP池id
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
    * @param string|null $id 公网IP池id
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
    *  公网IP池名字
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
    * @param string|null $name 公网IP池名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  取值, spec_bgp(专属离散动态), spec_sbgp(专属离散静态)
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
    * @param string|null $type 取值, spec_bgp(专属离散动态), spec_sbgp(专属离散静态)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  租户id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 租户id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets size
    *  池子大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 池子大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets used
    *  已经使用的ip数量
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 已经使用的ip数量
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets createdAt
    *  公网IP池创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 公网IP池创建时间
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
    *  公网IP池更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 公网IP池更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets billingInfo
    *  billingInfo
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\BillingInfoDict|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\BillingInfoDict|null $billingInfo billingInfo
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  功能说明：中心还是边缘。公网IP池取值为center
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 功能说明：中心还是边缘。公网IP池取值为center
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets shared
    *  功能说明：是否共享
    *
    * @return bool|null
    */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
    * Sets shared
    *
    * @param bool|null $shared 功能说明：是否共享
    *
    * @return $this
    */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
        return $this;
    }

    /**
    * Gets isCommon
    *  功能说明：是否公共池
    *
    * @return bool|null
    */
    public function getIsCommon()
    {
        return $this->container['isCommon'];
    }

    /**
    * Sets isCommon
    *
    * @param bool|null $isCommon 功能说明：是否公共池
    *
    * @return $this
    */
    public function setIsCommon($isCommon)
    {
        $this->container['isCommon'] = $isCommon;
        return $this;
    }

    /**
    * Gets tags
    *  默认不显示。用户标签
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\TagsInfo[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\TagsInfo[]|null $tags 默认不显示。用户标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
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
    * @param string|null $enterpriseProjectId 功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets allowShareBandwidthTypes
    *  功能说明：表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该           publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @return string[]|null
    */
    public function getAllowShareBandwidthTypes()
    {
        return $this->container['allowShareBandwidthTypes'];
    }

    /**
    * Sets allowShareBandwidthTypes
    *
    * @param string[]|null $allowShareBandwidthTypes 功能说明：表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该           publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @return $this
    */
    public function setAllowShareBandwidthTypes($allowShareBandwidthTypes)
    {
        $this->container['allowShareBandwidthTypes'] = $allowShareBandwidthTypes;
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

