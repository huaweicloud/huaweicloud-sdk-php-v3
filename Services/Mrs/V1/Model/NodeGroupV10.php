<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeGroupV10 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeGroupV10';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  节点组名。
    * nodeNum  节点数量，取值范围0～500，Master节点和Core节点数量至少为1，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。
    * nodeSpecId  节点实例规格ID。
    * vmProductId  节点虚拟机产品ID。
    * vmSpecCode  节点虚拟机产品规格。
    * nodeProductId  节点实例产品ID。
    * rootVolumeSize  节点系统盘大小，不可配置，默认为40GB。
    * rootVolumeProductId  节点系统盘的产品ID。
    * rootVolumeType  节点系统盘的类型。
    * rootVolumeResourceSpecCode  节点系统盘产品规格。
    * rootVolumeResourceType  节点系统盘产品类型。
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。  - SATA：普通IO - SAS：高IO - SSD：超高IO
    * dataVolumeCount  节点数据磁盘存储数目。
    * dataVolumeSize  节点数据磁盘存储大小。
    * dataVolumeProductId  节点数据磁盘的产品ID。
    * dataVolumeResourceSpecCode  节点数据磁盘的产品规格。
    * dataVolumeResourceType  节点数据磁盘的产品类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'nodeNum' => 'int',
            'nodeSize' => 'string',
            'nodeSpecId' => 'string',
            'vmProductId' => 'string',
            'vmSpecCode' => 'string',
            'nodeProductId' => 'string',
            'rootVolumeSize' => 'int',
            'rootVolumeProductId' => 'string',
            'rootVolumeType' => 'string',
            'rootVolumeResourceSpecCode' => 'string',
            'rootVolumeResourceType' => 'string',
            'dataVolumeType' => 'string',
            'dataVolumeCount' => 'int',
            'dataVolumeSize' => 'int',
            'dataVolumeProductId' => 'string',
            'dataVolumeResourceSpecCode' => 'string',
            'dataVolumeResourceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  节点组名。
    * nodeNum  节点数量，取值范围0～500，Master节点和Core节点数量至少为1，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。
    * nodeSpecId  节点实例规格ID。
    * vmProductId  节点虚拟机产品ID。
    * vmSpecCode  节点虚拟机产品规格。
    * nodeProductId  节点实例产品ID。
    * rootVolumeSize  节点系统盘大小，不可配置，默认为40GB。
    * rootVolumeProductId  节点系统盘的产品ID。
    * rootVolumeType  节点系统盘的类型。
    * rootVolumeResourceSpecCode  节点系统盘产品规格。
    * rootVolumeResourceType  节点系统盘产品类型。
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。  - SATA：普通IO - SAS：高IO - SSD：超高IO
    * dataVolumeCount  节点数据磁盘存储数目。
    * dataVolumeSize  节点数据磁盘存储大小。
    * dataVolumeProductId  节点数据磁盘的产品ID。
    * dataVolumeResourceSpecCode  节点数据磁盘的产品规格。
    * dataVolumeResourceType  节点数据磁盘的产品类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'nodeNum' => 'int32',
        'nodeSize' => null,
        'nodeSpecId' => null,
        'vmProductId' => null,
        'vmSpecCode' => null,
        'nodeProductId' => null,
        'rootVolumeSize' => 'int32',
        'rootVolumeProductId' => null,
        'rootVolumeType' => null,
        'rootVolumeResourceSpecCode' => null,
        'rootVolumeResourceType' => null,
        'dataVolumeType' => null,
        'dataVolumeCount' => 'int32',
        'dataVolumeSize' => 'int32',
        'dataVolumeProductId' => null,
        'dataVolumeResourceSpecCode' => null,
        'dataVolumeResourceType' => null
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
    * groupName  节点组名。
    * nodeNum  节点数量，取值范围0～500，Master节点和Core节点数量至少为1，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。
    * nodeSpecId  节点实例规格ID。
    * vmProductId  节点虚拟机产品ID。
    * vmSpecCode  节点虚拟机产品规格。
    * nodeProductId  节点实例产品ID。
    * rootVolumeSize  节点系统盘大小，不可配置，默认为40GB。
    * rootVolumeProductId  节点系统盘的产品ID。
    * rootVolumeType  节点系统盘的类型。
    * rootVolumeResourceSpecCode  节点系统盘产品规格。
    * rootVolumeResourceType  节点系统盘产品类型。
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。  - SATA：普通IO - SAS：高IO - SSD：超高IO
    * dataVolumeCount  节点数据磁盘存储数目。
    * dataVolumeSize  节点数据磁盘存储大小。
    * dataVolumeProductId  节点数据磁盘的产品ID。
    * dataVolumeResourceSpecCode  节点数据磁盘的产品规格。
    * dataVolumeResourceType  节点数据磁盘的产品类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'GroupName',
            'nodeNum' => 'NodeNum',
            'nodeSize' => 'NodeSize',
            'nodeSpecId' => 'NodeSpecId',
            'vmProductId' => 'VmProductId',
            'vmSpecCode' => 'VmSpecCode',
            'nodeProductId' => 'NodeProductId',
            'rootVolumeSize' => 'RootVolumeSize',
            'rootVolumeProductId' => 'RootVolumeProductId',
            'rootVolumeType' => 'RootVolumeType',
            'rootVolumeResourceSpecCode' => 'RootVolumeResourceSpecCode',
            'rootVolumeResourceType' => 'RootVolumeResourceType',
            'dataVolumeType' => 'DataVolumeType',
            'dataVolumeCount' => 'DataVolumeCount',
            'dataVolumeSize' => 'DataVolumeSize',
            'dataVolumeProductId' => 'DataVolumeProductId',
            'dataVolumeResourceSpecCode' => 'DataVolumeResourceSpecCode',
            'dataVolumeResourceType' => 'DataVolumeResourceType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  节点组名。
    * nodeNum  节点数量，取值范围0～500，Master节点和Core节点数量至少为1，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。
    * nodeSpecId  节点实例规格ID。
    * vmProductId  节点虚拟机产品ID。
    * vmSpecCode  节点虚拟机产品规格。
    * nodeProductId  节点实例产品ID。
    * rootVolumeSize  节点系统盘大小，不可配置，默认为40GB。
    * rootVolumeProductId  节点系统盘的产品ID。
    * rootVolumeType  节点系统盘的类型。
    * rootVolumeResourceSpecCode  节点系统盘产品规格。
    * rootVolumeResourceType  节点系统盘产品类型。
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。  - SATA：普通IO - SAS：高IO - SSD：超高IO
    * dataVolumeCount  节点数据磁盘存储数目。
    * dataVolumeSize  节点数据磁盘存储大小。
    * dataVolumeProductId  节点数据磁盘的产品ID。
    * dataVolumeResourceSpecCode  节点数据磁盘的产品规格。
    * dataVolumeResourceType  节点数据磁盘的产品类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'nodeNum' => 'setNodeNum',
            'nodeSize' => 'setNodeSize',
            'nodeSpecId' => 'setNodeSpecId',
            'vmProductId' => 'setVmProductId',
            'vmSpecCode' => 'setVmSpecCode',
            'nodeProductId' => 'setNodeProductId',
            'rootVolumeSize' => 'setRootVolumeSize',
            'rootVolumeProductId' => 'setRootVolumeProductId',
            'rootVolumeType' => 'setRootVolumeType',
            'rootVolumeResourceSpecCode' => 'setRootVolumeResourceSpecCode',
            'rootVolumeResourceType' => 'setRootVolumeResourceType',
            'dataVolumeType' => 'setDataVolumeType',
            'dataVolumeCount' => 'setDataVolumeCount',
            'dataVolumeSize' => 'setDataVolumeSize',
            'dataVolumeProductId' => 'setDataVolumeProductId',
            'dataVolumeResourceSpecCode' => 'setDataVolumeResourceSpecCode',
            'dataVolumeResourceType' => 'setDataVolumeResourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  节点组名。
    * nodeNum  节点数量，取值范围0～500，Master节点和Core节点数量至少为1，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。
    * nodeSpecId  节点实例规格ID。
    * vmProductId  节点虚拟机产品ID。
    * vmSpecCode  节点虚拟机产品规格。
    * nodeProductId  节点实例产品ID。
    * rootVolumeSize  节点系统盘大小，不可配置，默认为40GB。
    * rootVolumeProductId  节点系统盘的产品ID。
    * rootVolumeType  节点系统盘的类型。
    * rootVolumeResourceSpecCode  节点系统盘产品规格。
    * rootVolumeResourceType  节点系统盘产品类型。
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。  - SATA：普通IO - SAS：高IO - SSD：超高IO
    * dataVolumeCount  节点数据磁盘存储数目。
    * dataVolumeSize  节点数据磁盘存储大小。
    * dataVolumeProductId  节点数据磁盘的产品ID。
    * dataVolumeResourceSpecCode  节点数据磁盘的产品规格。
    * dataVolumeResourceType  节点数据磁盘的产品类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'nodeNum' => 'getNodeNum',
            'nodeSize' => 'getNodeSize',
            'nodeSpecId' => 'getNodeSpecId',
            'vmProductId' => 'getVmProductId',
            'vmSpecCode' => 'getVmSpecCode',
            'nodeProductId' => 'getNodeProductId',
            'rootVolumeSize' => 'getRootVolumeSize',
            'rootVolumeProductId' => 'getRootVolumeProductId',
            'rootVolumeType' => 'getRootVolumeType',
            'rootVolumeResourceSpecCode' => 'getRootVolumeResourceSpecCode',
            'rootVolumeResourceType' => 'getRootVolumeResourceType',
            'dataVolumeType' => 'getDataVolumeType',
            'dataVolumeCount' => 'getDataVolumeCount',
            'dataVolumeSize' => 'getDataVolumeSize',
            'dataVolumeProductId' => 'getDataVolumeProductId',
            'dataVolumeResourceSpecCode' => 'getDataVolumeResourceSpecCode',
            'dataVolumeResourceType' => 'getDataVolumeResourceType'
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
    const DATA_VOLUME_TYPE_SATA = 'SATA';
    const DATA_VOLUME_TYPE_SAS = 'SAS';
    const DATA_VOLUME_TYPE_SSD = 'SSD';
    const DATA_VOLUME_TYPE_GPSSD = 'GPSSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataVolumeTypeAllowableValues()
    {
        return [
            self::DATA_VOLUME_TYPE_SATA,
            self::DATA_VOLUME_TYPE_SAS,
            self::DATA_VOLUME_TYPE_SSD,
            self::DATA_VOLUME_TYPE_GPSSD,
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['nodeSize'] = isset($data['nodeSize']) ? $data['nodeSize'] : null;
        $this->container['nodeSpecId'] = isset($data['nodeSpecId']) ? $data['nodeSpecId'] : null;
        $this->container['vmProductId'] = isset($data['vmProductId']) ? $data['vmProductId'] : null;
        $this->container['vmSpecCode'] = isset($data['vmSpecCode']) ? $data['vmSpecCode'] : null;
        $this->container['nodeProductId'] = isset($data['nodeProductId']) ? $data['nodeProductId'] : null;
        $this->container['rootVolumeSize'] = isset($data['rootVolumeSize']) ? $data['rootVolumeSize'] : null;
        $this->container['rootVolumeProductId'] = isset($data['rootVolumeProductId']) ? $data['rootVolumeProductId'] : null;
        $this->container['rootVolumeType'] = isset($data['rootVolumeType']) ? $data['rootVolumeType'] : null;
        $this->container['rootVolumeResourceSpecCode'] = isset($data['rootVolumeResourceSpecCode']) ? $data['rootVolumeResourceSpecCode'] : null;
        $this->container['rootVolumeResourceType'] = isset($data['rootVolumeResourceType']) ? $data['rootVolumeResourceType'] : null;
        $this->container['dataVolumeType'] = isset($data['dataVolumeType']) ? $data['dataVolumeType'] : null;
        $this->container['dataVolumeCount'] = isset($data['dataVolumeCount']) ? $data['dataVolumeCount'] : null;
        $this->container['dataVolumeSize'] = isset($data['dataVolumeSize']) ? $data['dataVolumeSize'] : null;
        $this->container['dataVolumeProductId'] = isset($data['dataVolumeProductId']) ? $data['dataVolumeProductId'] : null;
        $this->container['dataVolumeResourceSpecCode'] = isset($data['dataVolumeResourceSpecCode']) ? $data['dataVolumeResourceSpecCode'] : null;
        $this->container['dataVolumeResourceType'] = isset($data['dataVolumeResourceType']) ? $data['dataVolumeResourceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] > 500)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootVolumeSize']) && ($this->container['rootVolumeSize'] > 32000)) {
                $invalidProperties[] = "invalid value for 'rootVolumeSize', must be smaller than or equal to 32000.";
            }
            if (!is_null($this->container['rootVolumeSize']) && ($this->container['rootVolumeSize'] < 40)) {
                $invalidProperties[] = "invalid value for 'rootVolumeSize', must be bigger than or equal to 40.";
            }
            $allowedValues = $this->getDataVolumeTypeAllowableValues();
                if (!is_null($this->container['dataVolumeType']) && !in_array($this->container['dataVolumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataVolumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dataVolumeCount']) && ($this->container['dataVolumeCount'] > 10)) {
                $invalidProperties[] = "invalid value for 'dataVolumeCount', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['dataVolumeCount']) && ($this->container['dataVolumeCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'dataVolumeCount', must be bigger than or equal to 0.";
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
    * Gets groupName
    *  节点组名。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 节点组名。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点数量，取值范围0～500，Master节点和Core节点数量至少为1，Core与Task节点总数最大为500个。
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum 节点数量，取值范围0～500，Master节点和Core节点数量至少为1，Core与Task节点总数最大为500个。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets nodeSize
    *  节点的实例规格。
    *
    * @return string|null
    */
    public function getNodeSize()
    {
        return $this->container['nodeSize'];
    }

    /**
    * Sets nodeSize
    *
    * @param string|null $nodeSize 节点的实例规格。
    *
    * @return $this
    */
    public function setNodeSize($nodeSize)
    {
        $this->container['nodeSize'] = $nodeSize;
        return $this;
    }

    /**
    * Gets nodeSpecId
    *  节点实例规格ID。
    *
    * @return string|null
    */
    public function getNodeSpecId()
    {
        return $this->container['nodeSpecId'];
    }

    /**
    * Sets nodeSpecId
    *
    * @param string|null $nodeSpecId 节点实例规格ID。
    *
    * @return $this
    */
    public function setNodeSpecId($nodeSpecId)
    {
        $this->container['nodeSpecId'] = $nodeSpecId;
        return $this;
    }

    /**
    * Gets vmProductId
    *  节点虚拟机产品ID。
    *
    * @return string|null
    */
    public function getVmProductId()
    {
        return $this->container['vmProductId'];
    }

    /**
    * Sets vmProductId
    *
    * @param string|null $vmProductId 节点虚拟机产品ID。
    *
    * @return $this
    */
    public function setVmProductId($vmProductId)
    {
        $this->container['vmProductId'] = $vmProductId;
        return $this;
    }

    /**
    * Gets vmSpecCode
    *  节点虚拟机产品规格。
    *
    * @return string|null
    */
    public function getVmSpecCode()
    {
        return $this->container['vmSpecCode'];
    }

    /**
    * Sets vmSpecCode
    *
    * @param string|null $vmSpecCode 节点虚拟机产品规格。
    *
    * @return $this
    */
    public function setVmSpecCode($vmSpecCode)
    {
        $this->container['vmSpecCode'] = $vmSpecCode;
        return $this;
    }

    /**
    * Gets nodeProductId
    *  节点实例产品ID。
    *
    * @return string|null
    */
    public function getNodeProductId()
    {
        return $this->container['nodeProductId'];
    }

    /**
    * Sets nodeProductId
    *
    * @param string|null $nodeProductId 节点实例产品ID。
    *
    * @return $this
    */
    public function setNodeProductId($nodeProductId)
    {
        $this->container['nodeProductId'] = $nodeProductId;
        return $this;
    }

    /**
    * Gets rootVolumeSize
    *  节点系统盘大小，不可配置，默认为40GB。
    *
    * @return int|null
    */
    public function getRootVolumeSize()
    {
        return $this->container['rootVolumeSize'];
    }

    /**
    * Sets rootVolumeSize
    *
    * @param int|null $rootVolumeSize 节点系统盘大小，不可配置，默认为40GB。
    *
    * @return $this
    */
    public function setRootVolumeSize($rootVolumeSize)
    {
        $this->container['rootVolumeSize'] = $rootVolumeSize;
        return $this;
    }

    /**
    * Gets rootVolumeProductId
    *  节点系统盘的产品ID。
    *
    * @return string|null
    */
    public function getRootVolumeProductId()
    {
        return $this->container['rootVolumeProductId'];
    }

    /**
    * Sets rootVolumeProductId
    *
    * @param string|null $rootVolumeProductId 节点系统盘的产品ID。
    *
    * @return $this
    */
    public function setRootVolumeProductId($rootVolumeProductId)
    {
        $this->container['rootVolumeProductId'] = $rootVolumeProductId;
        return $this;
    }

    /**
    * Gets rootVolumeType
    *  节点系统盘的类型。
    *
    * @return string|null
    */
    public function getRootVolumeType()
    {
        return $this->container['rootVolumeType'];
    }

    /**
    * Sets rootVolumeType
    *
    * @param string|null $rootVolumeType 节点系统盘的类型。
    *
    * @return $this
    */
    public function setRootVolumeType($rootVolumeType)
    {
        $this->container['rootVolumeType'] = $rootVolumeType;
        return $this;
    }

    /**
    * Gets rootVolumeResourceSpecCode
    *  节点系统盘产品规格。
    *
    * @return string|null
    */
    public function getRootVolumeResourceSpecCode()
    {
        return $this->container['rootVolumeResourceSpecCode'];
    }

    /**
    * Sets rootVolumeResourceSpecCode
    *
    * @param string|null $rootVolumeResourceSpecCode 节点系统盘产品规格。
    *
    * @return $this
    */
    public function setRootVolumeResourceSpecCode($rootVolumeResourceSpecCode)
    {
        $this->container['rootVolumeResourceSpecCode'] = $rootVolumeResourceSpecCode;
        return $this;
    }

    /**
    * Gets rootVolumeResourceType
    *  节点系统盘产品类型。
    *
    * @return string|null
    */
    public function getRootVolumeResourceType()
    {
        return $this->container['rootVolumeResourceType'];
    }

    /**
    * Sets rootVolumeResourceType
    *
    * @param string|null $rootVolumeResourceType 节点系统盘产品类型。
    *
    * @return $this
    */
    public function setRootVolumeResourceType($rootVolumeResourceType)
    {
        $this->container['rootVolumeResourceType'] = $rootVolumeResourceType;
        return $this;
    }

    /**
    * Gets dataVolumeType
    *  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。  - SATA：普通IO - SAS：高IO - SSD：超高IO
    *
    * @return string|null
    */
    public function getDataVolumeType()
    {
        return $this->container['dataVolumeType'];
    }

    /**
    * Sets dataVolumeType
    *
    * @param string|null $dataVolumeType 节点数据磁盘存储类别，目前支持SATA、SAS和SSD。  - SATA：普通IO - SAS：高IO - SSD：超高IO
    *
    * @return $this
    */
    public function setDataVolumeType($dataVolumeType)
    {
        $this->container['dataVolumeType'] = $dataVolumeType;
        return $this;
    }

    /**
    * Gets dataVolumeCount
    *  节点数据磁盘存储数目。
    *
    * @return int|null
    */
    public function getDataVolumeCount()
    {
        return $this->container['dataVolumeCount'];
    }

    /**
    * Sets dataVolumeCount
    *
    * @param int|null $dataVolumeCount 节点数据磁盘存储数目。
    *
    * @return $this
    */
    public function setDataVolumeCount($dataVolumeCount)
    {
        $this->container['dataVolumeCount'] = $dataVolumeCount;
        return $this;
    }

    /**
    * Gets dataVolumeSize
    *  节点数据磁盘存储大小。
    *
    * @return int|null
    */
    public function getDataVolumeSize()
    {
        return $this->container['dataVolumeSize'];
    }

    /**
    * Sets dataVolumeSize
    *
    * @param int|null $dataVolumeSize 节点数据磁盘存储大小。
    *
    * @return $this
    */
    public function setDataVolumeSize($dataVolumeSize)
    {
        $this->container['dataVolumeSize'] = $dataVolumeSize;
        return $this;
    }

    /**
    * Gets dataVolumeProductId
    *  节点数据磁盘的产品ID。
    *
    * @return string|null
    */
    public function getDataVolumeProductId()
    {
        return $this->container['dataVolumeProductId'];
    }

    /**
    * Sets dataVolumeProductId
    *
    * @param string|null $dataVolumeProductId 节点数据磁盘的产品ID。
    *
    * @return $this
    */
    public function setDataVolumeProductId($dataVolumeProductId)
    {
        $this->container['dataVolumeProductId'] = $dataVolumeProductId;
        return $this;
    }

    /**
    * Gets dataVolumeResourceSpecCode
    *  节点数据磁盘的产品规格。
    *
    * @return string|null
    */
    public function getDataVolumeResourceSpecCode()
    {
        return $this->container['dataVolumeResourceSpecCode'];
    }

    /**
    * Sets dataVolumeResourceSpecCode
    *
    * @param string|null $dataVolumeResourceSpecCode 节点数据磁盘的产品规格。
    *
    * @return $this
    */
    public function setDataVolumeResourceSpecCode($dataVolumeResourceSpecCode)
    {
        $this->container['dataVolumeResourceSpecCode'] = $dataVolumeResourceSpecCode;
        return $this;
    }

    /**
    * Gets dataVolumeResourceType
    *  节点数据磁盘的产品类型。
    *
    * @return string|null
    */
    public function getDataVolumeResourceType()
    {
        return $this->container['dataVolumeResourceType'];
    }

    /**
    * Sets dataVolumeResourceType
    *
    * @param string|null $dataVolumeResourceType 节点数据磁盘的产品类型。
    *
    * @return $this
    */
    public function setDataVolumeResourceType($dataVolumeResourceType)
    {
        $this->container['dataVolumeResourceType'] = $dataVolumeResourceType;
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

