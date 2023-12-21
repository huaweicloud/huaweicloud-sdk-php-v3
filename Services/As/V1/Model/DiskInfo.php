<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  磁盘大小，容量单位为GB。系统盘输入大小范围为1~1024，且不小于镜像中系统盘的最小(min_disk属性)值。数据盘输入大小范围为10~32768。
    * volumeType  云服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型。SAS：高IO磁盘类型。SSD：超高IO磁盘类型。GPSSD：通用型SSD磁盘类型。co-p1：高IO (性能优化Ⅰ型)uh-l1：超高IO (时延优化)GPSSD2: 通用型SSD V2云硬盘ESSD2: 极速型SSD V2云硬盘当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。说明：对于HANA云服务器、HL1型云服务器、HL2型云服务器，需使用co-p1和uh-l1两种磁盘类型。对于其他类型的云服务器，不能使用co-p1和uh-l1两种磁盘类型。了解不同磁盘类型的详细信息，请参见[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。 说明： 系统盘不支持加密。
    * dedicatedStorageId  云服务器的磁盘可指定创建在用户的专属存储中，需要指定专属存储ID。说明：同一个伸缩配置中的磁盘需统一指定或统一不指定专属存储，不支持混用；当指定专属存储时，所有专属存储需要属于同一个可用分区，且每个磁盘选择的专属存储支持的磁盘类型都需要和参数volume_type保持一致。
    * dataDiskImageId  云服务器的数据盘可指定从数据盘镜像导出，需要指定数据盘镜像ID。
    * snapshotId  当选择使用整机镜像时，云服务器的系统盘及数据盘将通过整机备份恢复，需要指定磁盘备份的快照ID。说明：磁盘备份的快照ID可通过镜像的整机备份ID在CSBS查询备份详情获得；一个伸缩配置中的每一个disk需要通过snapshot_id和整机备份中的磁盘备份一一对应。
    * metadata  metadata
    * iops  为云硬盘配置iops。当“volume_type”设置为GPSSD2、ESSD2类型的云硬盘时，该参数必填，其他类型无需设置。
    * throughput  为云硬盘配置吞吐量，单位是MiB/s。当“volume_type”设置为GPSSD2类型的云硬盘时必填，其他类型不能设置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'volumeType' => 'string',
            'diskType' => 'string',
            'dedicatedStorageId' => 'string',
            'dataDiskImageId' => 'string',
            'snapshotId' => 'string',
            'metadata' => '\HuaweiCloud\SDK\_As\V1\Model\MetaData',
            'iops' => 'int',
            'throughput' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  磁盘大小，容量单位为GB。系统盘输入大小范围为1~1024，且不小于镜像中系统盘的最小(min_disk属性)值。数据盘输入大小范围为10~32768。
    * volumeType  云服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型。SAS：高IO磁盘类型。SSD：超高IO磁盘类型。GPSSD：通用型SSD磁盘类型。co-p1：高IO (性能优化Ⅰ型)uh-l1：超高IO (时延优化)GPSSD2: 通用型SSD V2云硬盘ESSD2: 极速型SSD V2云硬盘当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。说明：对于HANA云服务器、HL1型云服务器、HL2型云服务器，需使用co-p1和uh-l1两种磁盘类型。对于其他类型的云服务器，不能使用co-p1和uh-l1两种磁盘类型。了解不同磁盘类型的详细信息，请参见[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。 说明： 系统盘不支持加密。
    * dedicatedStorageId  云服务器的磁盘可指定创建在用户的专属存储中，需要指定专属存储ID。说明：同一个伸缩配置中的磁盘需统一指定或统一不指定专属存储，不支持混用；当指定专属存储时，所有专属存储需要属于同一个可用分区，且每个磁盘选择的专属存储支持的磁盘类型都需要和参数volume_type保持一致。
    * dataDiskImageId  云服务器的数据盘可指定从数据盘镜像导出，需要指定数据盘镜像ID。
    * snapshotId  当选择使用整机镜像时，云服务器的系统盘及数据盘将通过整机备份恢复，需要指定磁盘备份的快照ID。说明：磁盘备份的快照ID可通过镜像的整机备份ID在CSBS查询备份详情获得；一个伸缩配置中的每一个disk需要通过snapshot_id和整机备份中的磁盘备份一一对应。
    * metadata  metadata
    * iops  为云硬盘配置iops。当“volume_type”设置为GPSSD2、ESSD2类型的云硬盘时，该参数必填，其他类型无需设置。
    * throughput  为云硬盘配置吞吐量，单位是MiB/s。当“volume_type”设置为GPSSD2类型的云硬盘时必填，其他类型不能设置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => null,
        'volumeType' => null,
        'diskType' => null,
        'dedicatedStorageId' => null,
        'dataDiskImageId' => null,
        'snapshotId' => null,
        'metadata' => null,
        'iops' => 'int32',
        'throughput' => 'int32'
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
    * size  磁盘大小，容量单位为GB。系统盘输入大小范围为1~1024，且不小于镜像中系统盘的最小(min_disk属性)值。数据盘输入大小范围为10~32768。
    * volumeType  云服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型。SAS：高IO磁盘类型。SSD：超高IO磁盘类型。GPSSD：通用型SSD磁盘类型。co-p1：高IO (性能优化Ⅰ型)uh-l1：超高IO (时延优化)GPSSD2: 通用型SSD V2云硬盘ESSD2: 极速型SSD V2云硬盘当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。说明：对于HANA云服务器、HL1型云服务器、HL2型云服务器，需使用co-p1和uh-l1两种磁盘类型。对于其他类型的云服务器，不能使用co-p1和uh-l1两种磁盘类型。了解不同磁盘类型的详细信息，请参见[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。 说明： 系统盘不支持加密。
    * dedicatedStorageId  云服务器的磁盘可指定创建在用户的专属存储中，需要指定专属存储ID。说明：同一个伸缩配置中的磁盘需统一指定或统一不指定专属存储，不支持混用；当指定专属存储时，所有专属存储需要属于同一个可用分区，且每个磁盘选择的专属存储支持的磁盘类型都需要和参数volume_type保持一致。
    * dataDiskImageId  云服务器的数据盘可指定从数据盘镜像导出，需要指定数据盘镜像ID。
    * snapshotId  当选择使用整机镜像时，云服务器的系统盘及数据盘将通过整机备份恢复，需要指定磁盘备份的快照ID。说明：磁盘备份的快照ID可通过镜像的整机备份ID在CSBS查询备份详情获得；一个伸缩配置中的每一个disk需要通过snapshot_id和整机备份中的磁盘备份一一对应。
    * metadata  metadata
    * iops  为云硬盘配置iops。当“volume_type”设置为GPSSD2、ESSD2类型的云硬盘时，该参数必填，其他类型无需设置。
    * throughput  为云硬盘配置吞吐量，单位是MiB/s。当“volume_type”设置为GPSSD2类型的云硬盘时必填，其他类型不能设置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'volumeType' => 'volume_type',
            'diskType' => 'disk_type',
            'dedicatedStorageId' => 'dedicated_storage_id',
            'dataDiskImageId' => 'data_disk_image_id',
            'snapshotId' => 'snapshot_id',
            'metadata' => 'metadata',
            'iops' => 'iops',
            'throughput' => 'throughput'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  磁盘大小，容量单位为GB。系统盘输入大小范围为1~1024，且不小于镜像中系统盘的最小(min_disk属性)值。数据盘输入大小范围为10~32768。
    * volumeType  云服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型。SAS：高IO磁盘类型。SSD：超高IO磁盘类型。GPSSD：通用型SSD磁盘类型。co-p1：高IO (性能优化Ⅰ型)uh-l1：超高IO (时延优化)GPSSD2: 通用型SSD V2云硬盘ESSD2: 极速型SSD V2云硬盘当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。说明：对于HANA云服务器、HL1型云服务器、HL2型云服务器，需使用co-p1和uh-l1两种磁盘类型。对于其他类型的云服务器，不能使用co-p1和uh-l1两种磁盘类型。了解不同磁盘类型的详细信息，请参见[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。 说明： 系统盘不支持加密。
    * dedicatedStorageId  云服务器的磁盘可指定创建在用户的专属存储中，需要指定专属存储ID。说明：同一个伸缩配置中的磁盘需统一指定或统一不指定专属存储，不支持混用；当指定专属存储时，所有专属存储需要属于同一个可用分区，且每个磁盘选择的专属存储支持的磁盘类型都需要和参数volume_type保持一致。
    * dataDiskImageId  云服务器的数据盘可指定从数据盘镜像导出，需要指定数据盘镜像ID。
    * snapshotId  当选择使用整机镜像时，云服务器的系统盘及数据盘将通过整机备份恢复，需要指定磁盘备份的快照ID。说明：磁盘备份的快照ID可通过镜像的整机备份ID在CSBS查询备份详情获得；一个伸缩配置中的每一个disk需要通过snapshot_id和整机备份中的磁盘备份一一对应。
    * metadata  metadata
    * iops  为云硬盘配置iops。当“volume_type”设置为GPSSD2、ESSD2类型的云硬盘时，该参数必填，其他类型无需设置。
    * throughput  为云硬盘配置吞吐量，单位是MiB/s。当“volume_type”设置为GPSSD2类型的云硬盘时必填，其他类型不能设置。
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'volumeType' => 'setVolumeType',
            'diskType' => 'setDiskType',
            'dedicatedStorageId' => 'setDedicatedStorageId',
            'dataDiskImageId' => 'setDataDiskImageId',
            'snapshotId' => 'setSnapshotId',
            'metadata' => 'setMetadata',
            'iops' => 'setIops',
            'throughput' => 'setThroughput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  磁盘大小，容量单位为GB。系统盘输入大小范围为1~1024，且不小于镜像中系统盘的最小(min_disk属性)值。数据盘输入大小范围为10~32768。
    * volumeType  云服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型。SAS：高IO磁盘类型。SSD：超高IO磁盘类型。GPSSD：通用型SSD磁盘类型。co-p1：高IO (性能优化Ⅰ型)uh-l1：超高IO (时延优化)GPSSD2: 通用型SSD V2云硬盘ESSD2: 极速型SSD V2云硬盘当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。说明：对于HANA云服务器、HL1型云服务器、HL2型云服务器，需使用co-p1和uh-l1两种磁盘类型。对于其他类型的云服务器，不能使用co-p1和uh-l1两种磁盘类型。了解不同磁盘类型的详细信息，请参见[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。 说明： 系统盘不支持加密。
    * dedicatedStorageId  云服务器的磁盘可指定创建在用户的专属存储中，需要指定专属存储ID。说明：同一个伸缩配置中的磁盘需统一指定或统一不指定专属存储，不支持混用；当指定专属存储时，所有专属存储需要属于同一个可用分区，且每个磁盘选择的专属存储支持的磁盘类型都需要和参数volume_type保持一致。
    * dataDiskImageId  云服务器的数据盘可指定从数据盘镜像导出，需要指定数据盘镜像ID。
    * snapshotId  当选择使用整机镜像时，云服务器的系统盘及数据盘将通过整机备份恢复，需要指定磁盘备份的快照ID。说明：磁盘备份的快照ID可通过镜像的整机备份ID在CSBS查询备份详情获得；一个伸缩配置中的每一个disk需要通过snapshot_id和整机备份中的磁盘备份一一对应。
    * metadata  metadata
    * iops  为云硬盘配置iops。当“volume_type”设置为GPSSD2、ESSD2类型的云硬盘时，该参数必填，其他类型无需设置。
    * throughput  为云硬盘配置吞吐量，单位是MiB/s。当“volume_type”设置为GPSSD2类型的云硬盘时必填，其他类型不能设置。
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'volumeType' => 'getVolumeType',
            'diskType' => 'getDiskType',
            'dedicatedStorageId' => 'getDedicatedStorageId',
            'dataDiskImageId' => 'getDataDiskImageId',
            'snapshotId' => 'getSnapshotId',
            'metadata' => 'getMetadata',
            'iops' => 'getIops',
            'throughput' => 'getThroughput'
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
    const VOLUME_TYPE_SATA = 'SATA';
    const VOLUME_TYPE_SAS = 'SAS';
    const VOLUME_TYPE_SSD = 'SSD';
    const VOLUME_TYPE_CO_PL = 'co-pl';
    const VOLUME_TYPE_UH_11 = 'uh-11';
    const VOLUME_TYPE_GPSSD = 'GPSSD';
    const VOLUME_TYPE_GPSSD2 = 'GPSSD2';
    const VOLUME_TYPE_ESSD2 = 'ESSD2';
    const DISK_TYPE_SYS = 'SYS';
    const DISK_TYPE_DATA = 'DATA';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVolumeTypeAllowableValues()
    {
        return [
            self::VOLUME_TYPE_SATA,
            self::VOLUME_TYPE_SAS,
            self::VOLUME_TYPE_SSD,
            self::VOLUME_TYPE_CO_PL,
            self::VOLUME_TYPE_UH_11,
            self::VOLUME_TYPE_GPSSD,
            self::VOLUME_TYPE_GPSSD2,
            self::VOLUME_TYPE_ESSD2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDiskTypeAllowableValues()
    {
        return [
            self::DISK_TYPE_SYS,
            self::DISK_TYPE_DATA,
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['diskType'] = isset($data['diskType']) ? $data['diskType'] : null;
        $this->container['dedicatedStorageId'] = isset($data['dedicatedStorageId']) ? $data['dedicatedStorageId'] : null;
        $this->container['dataDiskImageId'] = isset($data['dataDiskImageId']) ? $data['dataDiskImageId'] : null;
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['iops'] = isset($data['iops']) ? $data['iops'] : null;
        $this->container['throughput'] = isset($data['throughput']) ? $data['throughput'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 32768)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 32768.";
            }
            if (($this->container['size'] < 10)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 10.";
            }
        if ($this->container['volumeType'] === null) {
            $invalidProperties[] = "'volumeType' can't be null";
        }
            $allowedValues = $this->getVolumeTypeAllowableValues();
                if (!is_null($this->container['volumeType']) && !in_array($this->container['volumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'volumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['diskType'] === null) {
            $invalidProperties[] = "'diskType' can't be null";
        }
            $allowedValues = $this->getDiskTypeAllowableValues();
                if (!is_null($this->container['diskType']) && !in_array($this->container['diskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'diskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dedicatedStorageId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['dedicatedStorageId'])) {
                $invalidProperties[] = "invalid value for 'dedicatedStorageId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['dataDiskImageId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['dataDiskImageId'])) {
                $invalidProperties[] = "invalid value for 'dataDiskImageId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['snapshotId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['snapshotId'])) {
                $invalidProperties[] = "invalid value for 'snapshotId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets size
    *  磁盘大小，容量单位为GB。系统盘输入大小范围为1~1024，且不小于镜像中系统盘的最小(min_disk属性)值。数据盘输入大小范围为10~32768。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 磁盘大小，容量单位为GB。系统盘输入大小范围为1~1024，且不小于镜像中系统盘的最小(min_disk属性)值。数据盘输入大小范围为10~32768。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets volumeType
    *  云服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型。SAS：高IO磁盘类型。SSD：超高IO磁盘类型。GPSSD：通用型SSD磁盘类型。co-p1：高IO (性能优化Ⅰ型)uh-l1：超高IO (时延优化)GPSSD2: 通用型SSD V2云硬盘ESSD2: 极速型SSD V2云硬盘当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。说明：对于HANA云服务器、HL1型云服务器、HL2型云服务器，需使用co-p1和uh-l1两种磁盘类型。对于其他类型的云服务器，不能使用co-p1和uh-l1两种磁盘类型。了解不同磁盘类型的详细信息，请参见[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @return string
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string $volumeType 云服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型。SAS：高IO磁盘类型。SSD：超高IO磁盘类型。GPSSD：通用型SSD磁盘类型。co-p1：高IO (性能优化Ⅰ型)uh-l1：超高IO (时延优化)GPSSD2: 通用型SSD V2云硬盘ESSD2: 极速型SSD V2云硬盘当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。说明：对于HANA云服务器、HL1型云服务器、HL2型云服务器，需使用co-p1和uh-l1两种磁盘类型。对于其他类型的云服务器，不能使用co-p1和uh-l1两种磁盘类型。了解不同磁盘类型的详细信息，请参见[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets diskType
    *  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。 说明： 系统盘不支持加密。
    *
    * @return string
    */
    public function getDiskType()
    {
        return $this->container['diskType'];
    }

    /**
    * Sets diskType
    *
    * @param string $diskType 系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。 说明： 系统盘不支持加密。
    *
    * @return $this
    */
    public function setDiskType($diskType)
    {
        $this->container['diskType'] = $diskType;
        return $this;
    }

    /**
    * Gets dedicatedStorageId
    *  云服务器的磁盘可指定创建在用户的专属存储中，需要指定专属存储ID。说明：同一个伸缩配置中的磁盘需统一指定或统一不指定专属存储，不支持混用；当指定专属存储时，所有专属存储需要属于同一个可用分区，且每个磁盘选择的专属存储支持的磁盘类型都需要和参数volume_type保持一致。
    *
    * @return string|null
    */
    public function getDedicatedStorageId()
    {
        return $this->container['dedicatedStorageId'];
    }

    /**
    * Sets dedicatedStorageId
    *
    * @param string|null $dedicatedStorageId 云服务器的磁盘可指定创建在用户的专属存储中，需要指定专属存储ID。说明：同一个伸缩配置中的磁盘需统一指定或统一不指定专属存储，不支持混用；当指定专属存储时，所有专属存储需要属于同一个可用分区，且每个磁盘选择的专属存储支持的磁盘类型都需要和参数volume_type保持一致。
    *
    * @return $this
    */
    public function setDedicatedStorageId($dedicatedStorageId)
    {
        $this->container['dedicatedStorageId'] = $dedicatedStorageId;
        return $this;
    }

    /**
    * Gets dataDiskImageId
    *  云服务器的数据盘可指定从数据盘镜像导出，需要指定数据盘镜像ID。
    *
    * @return string|null
    */
    public function getDataDiskImageId()
    {
        return $this->container['dataDiskImageId'];
    }

    /**
    * Sets dataDiskImageId
    *
    * @param string|null $dataDiskImageId 云服务器的数据盘可指定从数据盘镜像导出，需要指定数据盘镜像ID。
    *
    * @return $this
    */
    public function setDataDiskImageId($dataDiskImageId)
    {
        $this->container['dataDiskImageId'] = $dataDiskImageId;
        return $this;
    }

    /**
    * Gets snapshotId
    *  当选择使用整机镜像时，云服务器的系统盘及数据盘将通过整机备份恢复，需要指定磁盘备份的快照ID。说明：磁盘备份的快照ID可通过镜像的整机备份ID在CSBS查询备份详情获得；一个伸缩配置中的每一个disk需要通过snapshot_id和整机备份中的磁盘备份一一对应。
    *
    * @return string|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string|null $snapshotId 当选择使用整机镜像时，云服务器的系统盘及数据盘将通过整机备份恢复，需要指定磁盘备份的快照ID。说明：磁盘备份的快照ID可通过镜像的整机备份ID在CSBS查询备份详情获得；一个伸缩配置中的每一个disk需要通过snapshot_id和整机备份中的磁盘备份一一对应。
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\MetaData|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\MetaData|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets iops
    *  为云硬盘配置iops。当“volume_type”设置为GPSSD2、ESSD2类型的云硬盘时，该参数必填，其他类型无需设置。
    *
    * @return int|null
    */
    public function getIops()
    {
        return $this->container['iops'];
    }

    /**
    * Sets iops
    *
    * @param int|null $iops 为云硬盘配置iops。当“volume_type”设置为GPSSD2、ESSD2类型的云硬盘时，该参数必填，其他类型无需设置。
    *
    * @return $this
    */
    public function setIops($iops)
    {
        $this->container['iops'] = $iops;
        return $this;
    }

    /**
    * Gets throughput
    *  为云硬盘配置吞吐量，单位是MiB/s。当“volume_type”设置为GPSSD2类型的云硬盘时必填，其他类型不能设置。
    *
    * @return int|null
    */
    public function getThroughput()
    {
        return $this->container['throughput'];
    }

    /**
    * Sets throughput
    *
    * @param int|null $throughput 为云硬盘配置吞吐量，单位是MiB/s。当“volume_type”设置为GPSSD2类型的云硬盘时必填，其他类型不能设置。
    *
    * @return $this
    */
    public function setThroughput($throughput)
    {
        $this->container['throughput'] = $throughput;
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

