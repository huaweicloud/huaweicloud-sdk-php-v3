<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  模板ID
    * name  模板名称
    * isTemplate  是否是通用模板，如果模板关联一个任务，则不算通用模板
    * region  Region信息
    * projectid  项目ID
    * targetServerName  目标端服务器名称
    * availabilityZone  可用区
    * volumetype  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * flavor  虚拟机规格
    * vpc  vpc
    * nics  网卡信息，支持多个网卡，如果是自动创建，只填一个，ID使用“autoCreate”
    * securityGroups  安全组，支持多个安全组，如果是自动创建，只填一个，ID使用“autoCreate”
    * publicip  publicip
    * disk  磁盘信息
    * dataVolumeType  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * targetPassword  目的端密码
    * imageId  用户选择镜像版本Id值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'isTemplate' => 'string',
            'region' => 'string',
            'projectid' => 'string',
            'targetServerName' => 'string',
            'availabilityZone' => 'string',
            'volumetype' => 'string',
            'flavor' => 'string',
            'vpc' => '\HuaweiCloud\SDK\Sms\V3\Model\VpcObject',
            'nics' => '\HuaweiCloud\SDK\Sms\V3\Model\Nics[]',
            'securityGroups' => '\HuaweiCloud\SDK\Sms\V3\Model\SgObject[]',
            'publicip' => '\HuaweiCloud\SDK\Sms\V3\Model\PublicIp',
            'disk' => '\HuaweiCloud\SDK\Sms\V3\Model\TemplateDisk[]',
            'dataVolumeType' => 'string',
            'targetPassword' => 'string',
            'imageId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  模板ID
    * name  模板名称
    * isTemplate  是否是通用模板，如果模板关联一个任务，则不算通用模板
    * region  Region信息
    * projectid  项目ID
    * targetServerName  目标端服务器名称
    * availabilityZone  可用区
    * volumetype  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * flavor  虚拟机规格
    * vpc  vpc
    * nics  网卡信息，支持多个网卡，如果是自动创建，只填一个，ID使用“autoCreate”
    * securityGroups  安全组，支持多个安全组，如果是自动创建，只填一个，ID使用“autoCreate”
    * publicip  publicip
    * disk  磁盘信息
    * dataVolumeType  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * targetPassword  目的端密码
    * imageId  用户选择镜像版本Id值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'isTemplate' => null,
        'region' => null,
        'projectid' => null,
        'targetServerName' => null,
        'availabilityZone' => null,
        'volumetype' => null,
        'flavor' => null,
        'vpc' => null,
        'nics' => null,
        'securityGroups' => null,
        'publicip' => null,
        'disk' => null,
        'dataVolumeType' => null,
        'targetPassword' => null,
        'imageId' => null
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
    * id  模板ID
    * name  模板名称
    * isTemplate  是否是通用模板，如果模板关联一个任务，则不算通用模板
    * region  Region信息
    * projectid  项目ID
    * targetServerName  目标端服务器名称
    * availabilityZone  可用区
    * volumetype  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * flavor  虚拟机规格
    * vpc  vpc
    * nics  网卡信息，支持多个网卡，如果是自动创建，只填一个，ID使用“autoCreate”
    * securityGroups  安全组，支持多个安全组，如果是自动创建，只填一个，ID使用“autoCreate”
    * publicip  publicip
    * disk  磁盘信息
    * dataVolumeType  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * targetPassword  目的端密码
    * imageId  用户选择镜像版本Id值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'isTemplate' => 'is_template',
            'region' => 'region',
            'projectid' => 'projectid',
            'targetServerName' => 'target_server_name',
            'availabilityZone' => 'availability_zone',
            'volumetype' => 'volumetype',
            'flavor' => 'flavor',
            'vpc' => 'vpc',
            'nics' => 'nics',
            'securityGroups' => 'security_groups',
            'publicip' => 'publicip',
            'disk' => 'disk',
            'dataVolumeType' => 'data_volume_type',
            'targetPassword' => 'target_password',
            'imageId' => 'image_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  模板ID
    * name  模板名称
    * isTemplate  是否是通用模板，如果模板关联一个任务，则不算通用模板
    * region  Region信息
    * projectid  项目ID
    * targetServerName  目标端服务器名称
    * availabilityZone  可用区
    * volumetype  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * flavor  虚拟机规格
    * vpc  vpc
    * nics  网卡信息，支持多个网卡，如果是自动创建，只填一个，ID使用“autoCreate”
    * securityGroups  安全组，支持多个安全组，如果是自动创建，只填一个，ID使用“autoCreate”
    * publicip  publicip
    * disk  磁盘信息
    * dataVolumeType  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * targetPassword  目的端密码
    * imageId  用户选择镜像版本Id值
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'isTemplate' => 'setIsTemplate',
            'region' => 'setRegion',
            'projectid' => 'setProjectid',
            'targetServerName' => 'setTargetServerName',
            'availabilityZone' => 'setAvailabilityZone',
            'volumetype' => 'setVolumetype',
            'flavor' => 'setFlavor',
            'vpc' => 'setVpc',
            'nics' => 'setNics',
            'securityGroups' => 'setSecurityGroups',
            'publicip' => 'setPublicip',
            'disk' => 'setDisk',
            'dataVolumeType' => 'setDataVolumeType',
            'targetPassword' => 'setTargetPassword',
            'imageId' => 'setImageId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  模板ID
    * name  模板名称
    * isTemplate  是否是通用模板，如果模板关联一个任务，则不算通用模板
    * region  Region信息
    * projectid  项目ID
    * targetServerName  目标端服务器名称
    * availabilityZone  可用区
    * volumetype  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * flavor  虚拟机规格
    * vpc  vpc
    * nics  网卡信息，支持多个网卡，如果是自动创建，只填一个，ID使用“autoCreate”
    * securityGroups  安全组，支持多个安全组，如果是自动创建，只填一个，ID使用“autoCreate”
    * publicip  publicip
    * disk  磁盘信息
    * dataVolumeType  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    * targetPassword  目的端密码
    * imageId  用户选择镜像版本Id值
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'isTemplate' => 'getIsTemplate',
            'region' => 'getRegion',
            'projectid' => 'getProjectid',
            'targetServerName' => 'getTargetServerName',
            'availabilityZone' => 'getAvailabilityZone',
            'volumetype' => 'getVolumetype',
            'flavor' => 'getFlavor',
            'vpc' => 'getVpc',
            'nics' => 'getNics',
            'securityGroups' => 'getSecurityGroups',
            'publicip' => 'getPublicip',
            'disk' => 'getDisk',
            'dataVolumeType' => 'getDataVolumeType',
            'targetPassword' => 'getTargetPassword',
            'imageId' => 'getImageId'
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
    const VOLUMETYPE_SAS = 'SAS';
    const VOLUMETYPE_SSD = 'SSD';
    const VOLUMETYPE_SATA = 'SATA';
    const DATA_VOLUME_TYPE_SAS = 'SAS';
    const DATA_VOLUME_TYPE_SSD = 'SSD';
    const DATA_VOLUME_TYPE_SATA = 'SATA';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVolumetypeAllowableValues()
    {
        return [
            self::VOLUMETYPE_SAS,
            self::VOLUMETYPE_SSD,
            self::VOLUMETYPE_SATA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataVolumeTypeAllowableValues()
    {
        return [
            self::DATA_VOLUME_TYPE_SAS,
            self::DATA_VOLUME_TYPE_SSD,
            self::DATA_VOLUME_TYPE_SATA,
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
        $this->container['isTemplate'] = isset($data['isTemplate']) ? $data['isTemplate'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['projectid'] = isset($data['projectid']) ? $data['projectid'] : null;
        $this->container['targetServerName'] = isset($data['targetServerName']) ? $data['targetServerName'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['volumetype'] = isset($data['volumetype']) ? $data['volumetype'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['publicip'] = isset($data['publicip']) ? $data['publicip'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['dataVolumeType'] = isset($data['dataVolumeType']) ? $data['dataVolumeType'] : null;
        $this->container['targetPassword'] = isset($data['targetPassword']) ? $data['targetPassword'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isTemplate']) && (mb_strlen($this->container['isTemplate']) > 255)) {
                $invalidProperties[] = "invalid value for 'isTemplate', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['isTemplate']) && (mb_strlen($this->container['isTemplate']) < 0)) {
                $invalidProperties[] = "invalid value for 'isTemplate', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 255)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectid'] === null) {
            $invalidProperties[] = "'projectid' can't be null";
        }
            if ((mb_strlen($this->container['projectid']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectid', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['projectid']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectid', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetServerName'] === null) {
            $invalidProperties[] = "'targetServerName' can't be null";
        }
            if ((mb_strlen($this->container['targetServerName']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetServerName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['targetServerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetServerName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZone']) > 255)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['volumetype'] === null) {
            $invalidProperties[] = "'volumetype' can't be null";
        }
            $allowedValues = $this->getVolumetypeAllowableValues();
                if (!is_null($this->container['volumetype']) && !in_array($this->container['volumetype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'volumetype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
            if ((mb_strlen($this->container['flavor']) > 255)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['flavor']) < 0)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vpc'] === null) {
            $invalidProperties[] = "'vpc' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['publicip'] === null) {
            $invalidProperties[] = "'publicip' can't be null";
        }
        if ($this->container['disk'] === null) {
            $invalidProperties[] = "'disk' can't be null";
        }
        if ($this->container['dataVolumeType'] === null) {
            $invalidProperties[] = "'dataVolumeType' can't be null";
        }
            $allowedValues = $this->getDataVolumeTypeAllowableValues();
                if (!is_null($this->container['dataVolumeType']) && !in_array($this->container['dataVolumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataVolumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['targetPassword'] === null) {
            $invalidProperties[] = "'targetPassword' can't be null";
        }
            if ((mb_strlen($this->container['targetPassword']) > 1024)) {
                $invalidProperties[] = "invalid value for 'targetPassword', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['targetPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetPassword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
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
    *  模板ID
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
    * @param string|null $id 模板ID
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
    *  模板名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isTemplate
    *  是否是通用模板，如果模板关联一个任务，则不算通用模板
    *
    * @return string|null
    */
    public function getIsTemplate()
    {
        return $this->container['isTemplate'];
    }

    /**
    * Sets isTemplate
    *
    * @param string|null $isTemplate 是否是通用模板，如果模板关联一个任务，则不算通用模板
    *
    * @return $this
    */
    public function setIsTemplate($isTemplate)
    {
        $this->container['isTemplate'] = $isTemplate;
        return $this;
    }

    /**
    * Gets region
    *  Region信息
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
    * @param string $region Region信息
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets projectid
    *  项目ID
    *
    * @return string
    */
    public function getProjectid()
    {
        return $this->container['projectid'];
    }

    /**
    * Sets projectid
    *
    * @param string $projectid 项目ID
    *
    * @return $this
    */
    public function setProjectid($projectid)
    {
        $this->container['projectid'] = $projectid;
        return $this;
    }

    /**
    * Gets targetServerName
    *  目标端服务器名称
    *
    * @return string
    */
    public function getTargetServerName()
    {
        return $this->container['targetServerName'];
    }

    /**
    * Sets targetServerName
    *
    * @param string $targetServerName 目标端服务器名称
    *
    * @return $this
    */
    public function setTargetServerName($targetServerName)
    {
        $this->container['targetServerName'] = $targetServerName;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 可用区
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets volumetype
    *  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    *
    * @return string
    */
    public function getVolumetype()
    {
        return $this->container['volumetype'];
    }

    /**
    * Sets volumetype
    *
    * @param string $volumetype 数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    *
    * @return $this
    */
    public function setVolumetype($volumetype)
    {
        $this->container['volumetype'] = $volumetype;
        return $this;
    }

    /**
    * Gets flavor
    *  虚拟机规格
    *
    * @return string
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string $flavor 虚拟机规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets vpc
    *  vpc
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\VpcObject
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\VpcObject $vpc vpc
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets nics
    *  网卡信息，支持多个网卡，如果是自动创建，只填一个，ID使用“autoCreate”
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\Nics[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\Nics[] $nics 网卡信息，支持多个网卡，如果是自动创建，只填一个，ID使用“autoCreate”
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets securityGroups
    *  安全组，支持多个安全组，如果是自动创建，只填一个，ID使用“autoCreate”
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\SgObject[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\SgObject[] $securityGroups 安全组，支持多个安全组，如果是自动创建，只填一个，ID使用“autoCreate”
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets publicip
    *  publicip
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\PublicIp
    */
    public function getPublicip()
    {
        return $this->container['publicip'];
    }

    /**
    * Sets publicip
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\PublicIp $publicip publicip
    *
    * @return $this
    */
    public function setPublicip($publicip)
    {
        $this->container['publicip'] = $publicip;
        return $this;
    }

    /**
    * Gets disk
    *  磁盘信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TemplateDisk[]
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TemplateDisk[] $disk 磁盘信息
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets dataVolumeType
    *  数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    *
    * @return string
    */
    public function getDataVolumeType()
    {
        return $this->container['dataVolumeType'];
    }

    /**
    * Sets dataVolumeType
    *
    * @param string $dataVolumeType 数据盘磁盘类型 SAS:串行连接SCSI SSD:固态硬盘 SATA:串口硬盘
    *
    * @return $this
    */
    public function setDataVolumeType($dataVolumeType)
    {
        $this->container['dataVolumeType'] = $dataVolumeType;
        return $this;
    }

    /**
    * Gets targetPassword
    *  目的端密码
    *
    * @return string
    */
    public function getTargetPassword()
    {
        return $this->container['targetPassword'];
    }

    /**
    * Sets targetPassword
    *
    * @param string $targetPassword 目的端密码
    *
    * @return $this
    */
    public function setTargetPassword($targetPassword)
    {
        $this->container['targetPassword'] = $targetPassword;
        return $this;
    }

    /**
    * Gets imageId
    *  用户选择镜像版本Id值
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 用户选择镜像版本Id值
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
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

