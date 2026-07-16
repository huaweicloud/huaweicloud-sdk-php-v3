<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * capacity  **参数解释**：存储容量。 **取值范围**：EVS默认5G，EFS默认50G，最大限制4096G。
    * category  **参数解释**：支持的存储类型。不同存储类型的差异，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section5)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super)。 **取值范围**：枚举类型，取值如下： - SFS：弹性文件服务 - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统 - EFS：弹性文件服务（SFS Turbo）
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录，当前固定在/home/ma-user/work/下。 **取值范围**：不涉及。
    * ownership  **参数解释**：资源所属。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。
    * status  **参数解释**：EVS扩容状态，扩容时的状态为RESIZING，此时实例可以正常使用。 **取值范围**：不涉及。
    * id  **参数解释**：EFS专属存储盘ID或OBS存储ID，只有作为扩展存储时返回。 **取值范围**：不涉及。
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。 **取值范围**：不涉及。
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含的evs时，evs存储的sku编码。 **取值范围**：不涉及。
    * uri  **参数解释**：只有当category为EFS或OBS或OBSFS时，挂载存储源路径。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'capacity' => 'int',
            'category' => 'string',
            'mountPath' => 'string',
            'ownership' => 'string',
            'status' => 'string',
            'id' => 'string',
            'readOnly' => 'bool',
            'dewSecretName' => 'string',
            'evsSkuCode' => 'string',
            'uri' => 'string',
            'mountType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * capacity  **参数解释**：存储容量。 **取值范围**：EVS默认5G，EFS默认50G，最大限制4096G。
    * category  **参数解释**：支持的存储类型。不同存储类型的差异，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section5)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super)。 **取值范围**：枚举类型，取值如下： - SFS：弹性文件服务 - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统 - EFS：弹性文件服务（SFS Turbo）
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录，当前固定在/home/ma-user/work/下。 **取值范围**：不涉及。
    * ownership  **参数解释**：资源所属。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。
    * status  **参数解释**：EVS扩容状态，扩容时的状态为RESIZING，此时实例可以正常使用。 **取值范围**：不涉及。
    * id  **参数解释**：EFS专属存储盘ID或OBS存储ID，只有作为扩展存储时返回。 **取值范围**：不涉及。
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。 **取值范围**：不涉及。
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含的evs时，evs存储的sku编码。 **取值范围**：不涉及。
    * uri  **参数解释**：只有当category为EFS或OBS或OBSFS时，挂载存储源路径。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'capacity' => 'int32',
        'category' => null,
        'mountPath' => null,
        'ownership' => null,
        'status' => null,
        'id' => null,
        'readOnly' => null,
        'dewSecretName' => null,
        'evsSkuCode' => null,
        'uri' => null,
        'mountType' => null
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
    * capacity  **参数解释**：存储容量。 **取值范围**：EVS默认5G，EFS默认50G，最大限制4096G。
    * category  **参数解释**：支持的存储类型。不同存储类型的差异，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section5)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super)。 **取值范围**：枚举类型，取值如下： - SFS：弹性文件服务 - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统 - EFS：弹性文件服务（SFS Turbo）
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录，当前固定在/home/ma-user/work/下。 **取值范围**：不涉及。
    * ownership  **参数解释**：资源所属。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。
    * status  **参数解释**：EVS扩容状态，扩容时的状态为RESIZING，此时实例可以正常使用。 **取值范围**：不涉及。
    * id  **参数解释**：EFS专属存储盘ID或OBS存储ID，只有作为扩展存储时返回。 **取值范围**：不涉及。
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。 **取值范围**：不涉及。
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含的evs时，evs存储的sku编码。 **取值范围**：不涉及。
    * uri  **参数解释**：只有当category为EFS或OBS或OBSFS时，挂载存储源路径。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'capacity' => 'capacity',
            'category' => 'category',
            'mountPath' => 'mount_path',
            'ownership' => 'ownership',
            'status' => 'status',
            'id' => 'id',
            'readOnly' => 'read_only',
            'dewSecretName' => 'dew_secret_name',
            'evsSkuCode' => 'evs_sku_code',
            'uri' => 'uri',
            'mountType' => 'mount_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * capacity  **参数解释**：存储容量。 **取值范围**：EVS默认5G，EFS默认50G，最大限制4096G。
    * category  **参数解释**：支持的存储类型。不同存储类型的差异，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section5)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super)。 **取值范围**：枚举类型，取值如下： - SFS：弹性文件服务 - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统 - EFS：弹性文件服务（SFS Turbo）
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录，当前固定在/home/ma-user/work/下。 **取值范围**：不涉及。
    * ownership  **参数解释**：资源所属。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。
    * status  **参数解释**：EVS扩容状态，扩容时的状态为RESIZING，此时实例可以正常使用。 **取值范围**：不涉及。
    * id  **参数解释**：EFS专属存储盘ID或OBS存储ID，只有作为扩展存储时返回。 **取值范围**：不涉及。
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。 **取值范围**：不涉及。
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含的evs时，evs存储的sku编码。 **取值范围**：不涉及。
    * uri  **参数解释**：只有当category为EFS或OBS或OBSFS时，挂载存储源路径。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $setters = [
            'capacity' => 'setCapacity',
            'category' => 'setCategory',
            'mountPath' => 'setMountPath',
            'ownership' => 'setOwnership',
            'status' => 'setStatus',
            'id' => 'setId',
            'readOnly' => 'setReadOnly',
            'dewSecretName' => 'setDewSecretName',
            'evsSkuCode' => 'setEvsSkuCode',
            'uri' => 'setUri',
            'mountType' => 'setMountType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * capacity  **参数解释**：存储容量。 **取值范围**：EVS默认5G，EFS默认50G，最大限制4096G。
    * category  **参数解释**：支持的存储类型。不同存储类型的差异，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section5)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super)。 **取值范围**：枚举类型，取值如下： - SFS：弹性文件服务 - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统 - EFS：弹性文件服务（SFS Turbo）
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录，当前固定在/home/ma-user/work/下。 **取值范围**：不涉及。
    * ownership  **参数解释**：资源所属。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。
    * status  **参数解释**：EVS扩容状态，扩容时的状态为RESIZING，此时实例可以正常使用。 **取值范围**：不涉及。
    * id  **参数解释**：EFS专属存储盘ID或OBS存储ID，只有作为扩展存储时返回。 **取值范围**：不涉及。
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。 **取值范围**：不涉及。
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称。 **取值范围**：不涉及。
    * evsSkuCode  **参数解释**：规格包含的evs时，evs存储的sku编码。 **取值范围**：不涉及。
    * uri  **参数解释**：只有当category为EFS或OBS或OBSFS时，挂载存储源路径。 **取值范围**：不涉及。
    * mountType  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $getters = [
            'capacity' => 'getCapacity',
            'category' => 'getCategory',
            'mountPath' => 'getMountPath',
            'ownership' => 'getOwnership',
            'status' => 'getStatus',
            'id' => 'getId',
            'readOnly' => 'getReadOnly',
            'dewSecretName' => 'getDewSecretName',
            'evsSkuCode' => 'getEvsSkuCode',
            'uri' => 'getUri',
            'mountType' => 'getMountType'
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
    const STATUS_DELETED = 'DELETED';
    const STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const STATUS_DELETING = 'DELETING';
    const STATUS_IN_USE = 'IN_USE';
    const STATUS_MOUNTED = 'MOUNTED';
    const STATUS_MOUNTING = 'MOUNTING';
    const STATUS_MOUNT_FAILED = 'MOUNT_FAILED';
    const STATUS_RESIZING = 'RESIZING';
    const STATUS_UNMOUNTED = 'UNMOUNTED';
    const STATUS_UNMOUNTING = 'UNMOUNTING';
    const STATUS_UNMOUNT_FAILED = 'UNMOUNT_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DELETED,
            self::STATUS_DELETE_FAILED,
            self::STATUS_DELETING,
            self::STATUS_IN_USE,
            self::STATUS_MOUNTED,
            self::STATUS_MOUNTING,
            self::STATUS_MOUNT_FAILED,
            self::STATUS_RESIZING,
            self::STATUS_UNMOUNTED,
            self::STATUS_UNMOUNTING,
            self::STATUS_UNMOUNT_FAILED,
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
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['ownership'] = isset($data['ownership']) ? $data['ownership'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['dewSecretName'] = isset($data['dewSecretName']) ? $data['dewSecretName'] : null;
        $this->container['evsSkuCode'] = isset($data['evsSkuCode']) ? $data['evsSkuCode'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['mountType'] = isset($data['mountType']) ? $data['mountType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets capacity
    *  **参数解释**：存储容量。 **取值范围**：EVS默认5G，EFS默认50G，最大限制4096G。
    *
    * @return int|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param int|null $capacity **参数解释**：存储容量。 **取值范围**：EVS默认5G，EFS默认50G，最大限制4096G。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**：支持的存储类型。不同存储类型的差异，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section5)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super)。 **取值范围**：枚举类型，取值如下： - SFS：弹性文件服务 - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统 - EFS：弹性文件服务（SFS Turbo）
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**：支持的存储类型。不同存储类型的差异，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section5)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super)。 **取值范围**：枚举类型，取值如下： - SFS：弹性文件服务 - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统 - EFS：弹性文件服务（SFS Turbo）
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets mountPath
    *  **参数解释**：存储挂载至Notebook实例的目录，当前固定在/home/ma-user/work/下。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getMountPath()
    {
        return $this->container['mountPath'];
    }

    /**
    * Sets mountPath
    *
    * @param string|null $mountPath **参数解释**：存储挂载至Notebook实例的目录，当前固定在/home/ma-user/work/下。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
        return $this;
    }

    /**
    * Gets ownership
    *  **参数解释**：资源所属。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。
    *
    * @return string|null
    */
    public function getOwnership()
    {
        return $this->container['ownership'];
    }

    /**
    * Sets ownership
    *
    * @param string|null $ownership **参数解释**：资源所属。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。
    *
    * @return $this
    */
    public function setOwnership($ownership)
    {
        $this->container['ownership'] = $ownership;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：EVS扩容状态，扩容时的状态为RESIZING，此时实例可以正常使用。 **取值范围**：不涉及。
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
    * @param string|null $status **参数解释**：EVS扩容状态，扩容时的状态为RESIZING，此时实例可以正常使用。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：EFS专属存储盘ID或OBS存储ID，只有作为扩展存储时返回。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：EFS专属存储盘ID或OBS存储ID，只有作为扩展存储时返回。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets readOnly
    *  **参数解释**：扩展存储挂载目录是否只读。 **取值范围**：不涉及。
    *
    * @return bool|null
    */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
    * Sets readOnly
    *
    * @param bool|null $readOnly **参数解释**：扩展存储挂载目录是否只读。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;
        return $this;
    }

    /**
    * Gets dewSecretName
    *  **参数解释**：DEW存储的用户AKSK凭据名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDewSecretName()
    {
        return $this->container['dewSecretName'];
    }

    /**
    * Sets dewSecretName
    *
    * @param string|null $dewSecretName **参数解释**：DEW存储的用户AKSK凭据名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDewSecretName($dewSecretName)
    {
        $this->container['dewSecretName'] = $dewSecretName;
        return $this;
    }

    /**
    * Gets evsSkuCode
    *  **参数解释**：规格包含的evs时，evs存储的sku编码。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEvsSkuCode()
    {
        return $this->container['evsSkuCode'];
    }

    /**
    * Sets evsSkuCode
    *
    * @param string|null $evsSkuCode **参数解释**：规格包含的evs时，evs存储的sku编码。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEvsSkuCode($evsSkuCode)
    {
        $this->container['evsSkuCode'] = $evsSkuCode;
        return $this;
    }

    /**
    * Gets uri
    *  **参数解释**：只有当category为EFS或OBS或OBSFS时，挂载存储源路径。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri **参数解释**：只有当category为EFS或OBS或OBSFS时，挂载存储源路径。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets mountType
    *  **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @return string|null
    */
    public function getMountType()
    {
        return $this->container['mountType'];
    }

    /**
    * Sets mountType
    *
    * @param string|null $mountType **参数解释**：存储挂载类型。 **取值范围**：枚举类型，取值如下：  - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @return $this
    */
    public function setMountType($mountType)
    {
        $this->container['mountType'] = $mountType;
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

