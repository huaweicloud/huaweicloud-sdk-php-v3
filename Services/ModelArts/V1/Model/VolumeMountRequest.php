<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeMountRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeMountRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**：notebook支持的扩展存储类型，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section7)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super) **约束限制**：不涉及 **默认取值**：不涉及。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统（PFS） - EFS：弹性文件服务（SFS Turbo）
    * ownership  **参数解释**：资源所属 **参数约束**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。 **默认取值**：不涉及。
    * uri  **参数解释**：EFS专属存储盘uri或OBS并行文件系统路径 - EFS：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“共享路径”即为此参数的参数值。 - OBS：并行文件系统命名格式为：obs://<桶名>/<目录路径>/。登录对象存储服务控制台，在并行文件系统列表中，文件系统名称为桶名。单击文件系统名称进入详情页，在文件栏选择特定目录后，单击右侧“更多/复制路径”，该路径即为目录路径。 **参数约束**：只有当category为EFS或OBS或OBSFS，同时ownership为DEDICATED时必填，最大长度1024字符
    * id  **参数解释**：EFS专属存储盘ID，参数值获取方式如下：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“ID”即为此参数的参数值。 **参数约束**：只有当category为EFS，同时ownership为DEDICATED时必填。必须符合 UUID 格式（如 280a8bd5-03e2-4a5c-bea1-83d81e75bc53）。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径 **参数约束**：最大长度 256 字符
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。默认值为false，可读写 **参数约束**：不涉及
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称 **参数约束**：当category为OBS时必填，仅支持大小写字母、数字、中划线、下划线，长度 1-64 字符
    * capacity  **参数解释**：EVS云硬盘存储容量，单位GB。 **约束限制**：category为EVS时有效。 **取值范围**：不涉及。 **默认取值**：5。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'ownership' => 'string',
            'uri' => 'string',
            'id' => 'string',
            'mountPath' => 'string',
            'readOnly' => 'bool',
            'dewSecretName' => 'string',
            'capacity' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**：notebook支持的扩展存储类型，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section7)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super) **约束限制**：不涉及 **默认取值**：不涉及。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统（PFS） - EFS：弹性文件服务（SFS Turbo）
    * ownership  **参数解释**：资源所属 **参数约束**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。 **默认取值**：不涉及。
    * uri  **参数解释**：EFS专属存储盘uri或OBS并行文件系统路径 - EFS：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“共享路径”即为此参数的参数值。 - OBS：并行文件系统命名格式为：obs://<桶名>/<目录路径>/。登录对象存储服务控制台，在并行文件系统列表中，文件系统名称为桶名。单击文件系统名称进入详情页，在文件栏选择特定目录后，单击右侧“更多/复制路径”，该路径即为目录路径。 **参数约束**：只有当category为EFS或OBS或OBSFS，同时ownership为DEDICATED时必填，最大长度1024字符
    * id  **参数解释**：EFS专属存储盘ID，参数值获取方式如下：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“ID”即为此参数的参数值。 **参数约束**：只有当category为EFS，同时ownership为DEDICATED时必填。必须符合 UUID 格式（如 280a8bd5-03e2-4a5c-bea1-83d81e75bc53）。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径 **参数约束**：最大长度 256 字符
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。默认值为false，可读写 **参数约束**：不涉及
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称 **参数约束**：当category为OBS时必填，仅支持大小写字母、数字、中划线、下划线，长度 1-64 字符
    * capacity  **参数解释**：EVS云硬盘存储容量，单位GB。 **约束限制**：category为EVS时有效。 **取值范围**：不涉及。 **默认取值**：5。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'ownership' => null,
        'uri' => null,
        'id' => null,
        'mountPath' => null,
        'readOnly' => null,
        'dewSecretName' => null,
        'capacity' => 'int32'
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
    * category  **参数解释**：notebook支持的扩展存储类型，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section7)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super) **约束限制**：不涉及 **默认取值**：不涉及。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统（PFS） - EFS：弹性文件服务（SFS Turbo）
    * ownership  **参数解释**：资源所属 **参数约束**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。 **默认取值**：不涉及。
    * uri  **参数解释**：EFS专属存储盘uri或OBS并行文件系统路径 - EFS：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“共享路径”即为此参数的参数值。 - OBS：并行文件系统命名格式为：obs://<桶名>/<目录路径>/。登录对象存储服务控制台，在并行文件系统列表中，文件系统名称为桶名。单击文件系统名称进入详情页，在文件栏选择特定目录后，单击右侧“更多/复制路径”，该路径即为目录路径。 **参数约束**：只有当category为EFS或OBS或OBSFS，同时ownership为DEDICATED时必填，最大长度1024字符
    * id  **参数解释**：EFS专属存储盘ID，参数值获取方式如下：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“ID”即为此参数的参数值。 **参数约束**：只有当category为EFS，同时ownership为DEDICATED时必填。必须符合 UUID 格式（如 280a8bd5-03e2-4a5c-bea1-83d81e75bc53）。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径 **参数约束**：最大长度 256 字符
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。默认值为false，可读写 **参数约束**：不涉及
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称 **参数约束**：当category为OBS时必填，仅支持大小写字母、数字、中划线、下划线，长度 1-64 字符
    * capacity  **参数解释**：EVS云硬盘存储容量，单位GB。 **约束限制**：category为EVS时有效。 **取值范围**：不涉及。 **默认取值**：5。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'ownership' => 'ownership',
            'uri' => 'uri',
            'id' => 'id',
            'mountPath' => 'mount_path',
            'readOnly' => 'read_only',
            'dewSecretName' => 'dew_secret_name',
            'capacity' => 'capacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**：notebook支持的扩展存储类型，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section7)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super) **约束限制**：不涉及 **默认取值**：不涉及。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统（PFS） - EFS：弹性文件服务（SFS Turbo）
    * ownership  **参数解释**：资源所属 **参数约束**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。 **默认取值**：不涉及。
    * uri  **参数解释**：EFS专属存储盘uri或OBS并行文件系统路径 - EFS：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“共享路径”即为此参数的参数值。 - OBS：并行文件系统命名格式为：obs://<桶名>/<目录路径>/。登录对象存储服务控制台，在并行文件系统列表中，文件系统名称为桶名。单击文件系统名称进入详情页，在文件栏选择特定目录后，单击右侧“更多/复制路径”，该路径即为目录路径。 **参数约束**：只有当category为EFS或OBS或OBSFS，同时ownership为DEDICATED时必填，最大长度1024字符
    * id  **参数解释**：EFS专属存储盘ID，参数值获取方式如下：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“ID”即为此参数的参数值。 **参数约束**：只有当category为EFS，同时ownership为DEDICATED时必填。必须符合 UUID 格式（如 280a8bd5-03e2-4a5c-bea1-83d81e75bc53）。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径 **参数约束**：最大长度 256 字符
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。默认值为false，可读写 **参数约束**：不涉及
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称 **参数约束**：当category为OBS时必填，仅支持大小写字母、数字、中划线、下划线，长度 1-64 字符
    * capacity  **参数解释**：EVS云硬盘存储容量，单位GB。 **约束限制**：category为EVS时有效。 **取值范围**：不涉及。 **默认取值**：5。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'ownership' => 'setOwnership',
            'uri' => 'setUri',
            'id' => 'setId',
            'mountPath' => 'setMountPath',
            'readOnly' => 'setReadOnly',
            'dewSecretName' => 'setDewSecretName',
            'capacity' => 'setCapacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**：notebook支持的扩展存储类型，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section7)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super) **约束限制**：不涉及 **默认取值**：不涉及。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统（PFS） - EFS：弹性文件服务（SFS Turbo）
    * ownership  **参数解释**：资源所属 **参数约束**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。 **默认取值**：不涉及。
    * uri  **参数解释**：EFS专属存储盘uri或OBS并行文件系统路径 - EFS：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“共享路径”即为此参数的参数值。 - OBS：并行文件系统命名格式为：obs://<桶名>/<目录路径>/。登录对象存储服务控制台，在并行文件系统列表中，文件系统名称为桶名。单击文件系统名称进入详情页，在文件栏选择特定目录后，单击右侧“更多/复制路径”，该路径即为目录路径。 **参数约束**：只有当category为EFS或OBS或OBSFS，同时ownership为DEDICATED时必填，最大长度1024字符
    * id  **参数解释**：EFS专属存储盘ID，参数值获取方式如下：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“ID”即为此参数的参数值。 **参数约束**：只有当category为EFS，同时ownership为DEDICATED时必填。必须符合 UUID 格式（如 280a8bd5-03e2-4a5c-bea1-83d81e75bc53）。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径 **参数约束**：最大长度 256 字符
    * readOnly  **参数解释**：扩展存储挂载目录是否只读。默认值为false，可读写 **参数约束**：不涉及
    * dewSecretName  **参数解释**：DEW存储的用户AKSK凭据名称 **参数约束**：当category为OBS时必填，仅支持大小写字母、数字、中划线、下划线，长度 1-64 字符
    * capacity  **参数解释**：EVS云硬盘存储容量，单位GB。 **约束限制**：category为EVS时有效。 **取值范围**：不涉及。 **默认取值**：5。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'ownership' => 'getOwnership',
            'uri' => 'getUri',
            'id' => 'getId',
            'mountPath' => 'getMountPath',
            'readOnly' => 'getReadOnly',
            'dewSecretName' => 'getDewSecretName',
            'capacity' => 'getCapacity'
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
    const CATEGORY_OBS = 'OBS';
    const CATEGORY_OBSFS = 'OBSFS';
    const CATEGORY_EFS = 'EFS';
    const OWNERSHIP_MANAGED = 'MANAGED';
    const OWNERSHIP_DEDICATED = 'DEDICATED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_OBS,
            self::CATEGORY_OBSFS,
            self::CATEGORY_EFS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOwnershipAllowableValues()
    {
        return [
            self::OWNERSHIP_MANAGED,
            self::OWNERSHIP_DEDICATED,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['ownership'] = isset($data['ownership']) ? $data['ownership'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['dewSecretName'] = isset($data['dewSecretName']) ? $data['dewSecretName'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ownership'] === null) {
            $invalidProperties[] = "'ownership' can't be null";
        }
            $allowedValues = $this->getOwnershipAllowableValues();
                if (!is_null($this->container['ownership']) && !in_array($this->container['ownership'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ownership', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['uri']) && (mb_strlen($this->container['uri']) > 1024)) {
                $invalidProperties[] = "invalid value for 'uri', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['uri']) && (mb_strlen($this->container['uri']) < 0)) {
                $invalidProperties[] = "invalid value for 'uri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['mountPath']) && (mb_strlen($this->container['mountPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'mountPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['mountPath']) && (mb_strlen($this->container['mountPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'mountPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dewSecretName']) && (mb_strlen($this->container['dewSecretName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dewSecretName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dewSecretName']) && (mb_strlen($this->container['dewSecretName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dewSecretName', the character length must be bigger than or equal to 1.";
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
    * Gets category
    *  **参数解释**：notebook支持的扩展存储类型，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section7)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super) **约束限制**：不涉及 **默认取值**：不涉及。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统（PFS） - EFS：弹性文件服务（SFS Turbo）
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释**：notebook支持的扩展存储类型，详见[[开发环境中如何选择存储](https://support.huaweicloud.com/usermanual-standard-modelarts/devtool-modelarts_0004.html#section7)](tag:hc)[[开发环境中如何选择存储](https://support.huaweicloud.com/intl/zh-cn/usermanual-standard-modelarts/devtool-modelarts_0004.html#section6)](tag:hk)[《用户指南》的“开发环境中如何选择存储”章节](tag:fcs,fcs-super) **约束限制**：不涉及 **默认取值**：不涉及。 **取值范围**：枚举类型，取值如下： - EVS：云硬盘 - OBS：对象存储服务 - OBSFS：并行文件系统（PFS） - EFS：弹性文件服务（SFS Turbo）
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets ownership
    *  **参数解释**：资源所属 **参数约束**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getOwnership()
    {
        return $this->container['ownership'];
    }

    /**
    * Sets ownership
    *
    * @param string $ownership **参数解释**：资源所属 **参数约束**：不涉及。 **取值范围**：枚举类型，取值如下： - MANAGED：托管，即资源在服务上。 - DEDICATED：非托管，即资源在用户账号上，只有在category为EFS时支持。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOwnership($ownership)
    {
        $this->container['ownership'] = $ownership;
        return $this;
    }

    /**
    * Gets uri
    *  **参数解释**：EFS专属存储盘uri或OBS并行文件系统路径 - EFS：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“共享路径”即为此参数的参数值。 - OBS：并行文件系统命名格式为：obs://<桶名>/<目录路径>/。登录对象存储服务控制台，在并行文件系统列表中，文件系统名称为桶名。单击文件系统名称进入详情页，在文件栏选择特定目录后，单击右侧“更多/复制路径”，该路径即为目录路径。 **参数约束**：只有当category为EFS或OBS或OBSFS，同时ownership为DEDICATED时必填，最大长度1024字符
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
    * @param string|null $uri **参数解释**：EFS专属存储盘uri或OBS并行文件系统路径 - EFS：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“共享路径”即为此参数的参数值。 - OBS：并行文件系统命名格式为：obs://<桶名>/<目录路径>/。登录对象存储服务控制台，在并行文件系统列表中，文件系统名称为桶名。单击文件系统名称进入详情页，在文件栏选择特定目录后，单击右侧“更多/复制路径”，该路径即为目录路径。 **参数约束**：只有当category为EFS或OBS或OBSFS，同时ownership为DEDICATED时必填，最大长度1024字符
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：EFS专属存储盘ID，参数值获取方式如下：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“ID”即为此参数的参数值。 **参数约束**：只有当category为EFS，同时ownership为DEDICATED时必填。必须符合 UUID 格式（如 280a8bd5-03e2-4a5c-bea1-83d81e75bc53）。
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
    * @param string|null $id **参数解释**：EFS专属存储盘ID，参数值获取方式如下：登录弹性文件服务控制台，在文件系统列表中，单击文件系统名称进入详情页。其中，“ID”即为此参数的参数值。 **参数约束**：只有当category为EFS，同时ownership为DEDICATED时必填。必须符合 UUID 格式（如 280a8bd5-03e2-4a5c-bea1-83d81e75bc53）。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mountPath
    *  **参数解释**：在Notebook实例中挂载的路径 **参数约束**：最大长度 256 字符
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
    * @param string|null $mountPath **参数解释**：在Notebook实例中挂载的路径 **参数约束**：最大长度 256 字符
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
        return $this;
    }

    /**
    * Gets readOnly
    *  **参数解释**：扩展存储挂载目录是否只读。默认值为false，可读写 **参数约束**：不涉及
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
    * @param bool|null $readOnly **参数解释**：扩展存储挂载目录是否只读。默认值为false，可读写 **参数约束**：不涉及
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
    *  **参数解释**：DEW存储的用户AKSK凭据名称 **参数约束**：当category为OBS时必填，仅支持大小写字母、数字、中划线、下划线，长度 1-64 字符
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
    * @param string|null $dewSecretName **参数解释**：DEW存储的用户AKSK凭据名称 **参数约束**：当category为OBS时必填，仅支持大小写字母、数字、中划线、下划线，长度 1-64 字符
    *
    * @return $this
    */
    public function setDewSecretName($dewSecretName)
    {
        $this->container['dewSecretName'] = $dewSecretName;
        return $this;
    }

    /**
    * Gets capacity
    *  **参数解释**：EVS云硬盘存储容量，单位GB。 **约束限制**：category为EVS时有效。 **取值范围**：不涉及。 **默认取值**：5。
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
    * @param int|null $capacity **参数解释**：EVS云硬盘存储容量，单位GB。 **约束限制**：category为EVS时有效。 **取值范围**：不涉及。 **默认取值**：5。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
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

