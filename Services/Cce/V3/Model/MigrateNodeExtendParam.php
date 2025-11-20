<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateNodeExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateNodeExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxPods  **参数解释**： 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例。 该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 节点可以创建多少个Pod，受多个参数影响，具体请参见[节点可创建的最大Pod数量说明](maxPods.xml)。 **约束限制**： 不涉及 **取值范围**： 取值范围为16~256。 **默认取值**： 不涉及
    * dockerLvmConfigOverride  **参数解释**： Docker数据盘配置项。  待迁移节点的磁盘类型须和创建时一致（即“DockerLVMConfigOverride”参数中“diskType”字段的值须和创建时一致），请确保单次接口调用时批量选择的节点磁盘类型一致。  默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  **约束限制**： 不涉及 **取值范围**： 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG  **默认取值**： 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCceNodeImageId  **参数解释**： 指定待切换目标操作系统所使用的用户镜像ID。 > 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。  **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxPods' => 'int',
            'dockerLvmConfigOverride' => 'string',
            'alphaCcePreInstall' => 'string',
            'alphaCcePostInstall' => 'string',
            'alphaCceNodeImageId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxPods  **参数解释**： 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例。 该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 节点可以创建多少个Pod，受多个参数影响，具体请参见[节点可创建的最大Pod数量说明](maxPods.xml)。 **约束限制**： 不涉及 **取值范围**： 取值范围为16~256。 **默认取值**： 不涉及
    * dockerLvmConfigOverride  **参数解释**： Docker数据盘配置项。  待迁移节点的磁盘类型须和创建时一致（即“DockerLVMConfigOverride”参数中“diskType”字段的值须和创建时一致），请确保单次接口调用时批量选择的节点磁盘类型一致。  默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  **约束限制**： 不涉及 **取值范围**： 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG  **默认取值**： 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCceNodeImageId  **参数解释**： 指定待切换目标操作系统所使用的用户镜像ID。 > 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。  **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxPods' => 'int32',
        'dockerLvmConfigOverride' => null,
        'alphaCcePreInstall' => null,
        'alphaCcePostInstall' => null,
        'alphaCceNodeImageId' => null
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
    * maxPods  **参数解释**： 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例。 该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 节点可以创建多少个Pod，受多个参数影响，具体请参见[节点可创建的最大Pod数量说明](maxPods.xml)。 **约束限制**： 不涉及 **取值范围**： 取值范围为16~256。 **默认取值**： 不涉及
    * dockerLvmConfigOverride  **参数解释**： Docker数据盘配置项。  待迁移节点的磁盘类型须和创建时一致（即“DockerLVMConfigOverride”参数中“diskType”字段的值须和创建时一致），请确保单次接口调用时批量选择的节点磁盘类型一致。  默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  **约束限制**： 不涉及 **取值范围**： 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG  **默认取值**： 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCceNodeImageId  **参数解释**： 指定待切换目标操作系统所使用的用户镜像ID。 > 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。  **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxPods' => 'maxPods',
            'dockerLvmConfigOverride' => 'DockerLVMConfigOverride',
            'alphaCcePreInstall' => 'alpha.cce/preInstall',
            'alphaCcePostInstall' => 'alpha.cce/postInstall',
            'alphaCceNodeImageId' => 'alpha.cce/NodeImageID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxPods  **参数解释**： 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例。 该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 节点可以创建多少个Pod，受多个参数影响，具体请参见[节点可创建的最大Pod数量说明](maxPods.xml)。 **约束限制**： 不涉及 **取值范围**： 取值范围为16~256。 **默认取值**： 不涉及
    * dockerLvmConfigOverride  **参数解释**： Docker数据盘配置项。  待迁移节点的磁盘类型须和创建时一致（即“DockerLVMConfigOverride”参数中“diskType”字段的值须和创建时一致），请确保单次接口调用时批量选择的节点磁盘类型一致。  默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  **约束限制**： 不涉及 **取值范围**： 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG  **默认取值**： 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCceNodeImageId  **参数解释**： 指定待切换目标操作系统所使用的用户镜像ID。 > 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。  **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'maxPods' => 'setMaxPods',
            'dockerLvmConfigOverride' => 'setDockerLvmConfigOverride',
            'alphaCcePreInstall' => 'setAlphaCcePreInstall',
            'alphaCcePostInstall' => 'setAlphaCcePostInstall',
            'alphaCceNodeImageId' => 'setAlphaCceNodeImageId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxPods  **参数解释**： 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例。 该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 节点可以创建多少个Pod，受多个参数影响，具体请参见[节点可创建的最大Pod数量说明](maxPods.xml)。 **约束限制**： 不涉及 **取值范围**： 取值范围为16~256。 **默认取值**： 不涉及
    * dockerLvmConfigOverride  **参数解释**： Docker数据盘配置项。  待迁移节点的磁盘类型须和创建时一致（即“DockerLVMConfigOverride”参数中“diskType”字段的值须和创建时一致），请确保单次接口调用时批量选择的节点磁盘类型一致。  默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  **约束限制**： 不涉及 **取值范围**： 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG  **默认取值**： 不涉及
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCceNodeImageId  **参数解释**： 指定待切换目标操作系统所使用的用户镜像ID。 > 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。  **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'maxPods' => 'getMaxPods',
            'dockerLvmConfigOverride' => 'getDockerLvmConfigOverride',
            'alphaCcePreInstall' => 'getAlphaCcePreInstall',
            'alphaCcePostInstall' => 'getAlphaCcePostInstall',
            'alphaCceNodeImageId' => 'getAlphaCceNodeImageId'
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
        $this->container['maxPods'] = isset($data['maxPods']) ? $data['maxPods'] : null;
        $this->container['dockerLvmConfigOverride'] = isset($data['dockerLvmConfigOverride']) ? $data['dockerLvmConfigOverride'] : null;
        $this->container['alphaCcePreInstall'] = isset($data['alphaCcePreInstall']) ? $data['alphaCcePreInstall'] : null;
        $this->container['alphaCcePostInstall'] = isset($data['alphaCcePostInstall']) ? $data['alphaCcePostInstall'] : null;
        $this->container['alphaCceNodeImageId'] = isset($data['alphaCceNodeImageId']) ? $data['alphaCceNodeImageId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['maxPods']) && ($this->container['maxPods'] > 256)) {
                $invalidProperties[] = "invalid value for 'maxPods', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['maxPods']) && ($this->container['maxPods'] < 16)) {
                $invalidProperties[] = "invalid value for 'maxPods', must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['alphaCcePreInstall']) && (mb_strlen($this->container['alphaCcePreInstall']) > 10240)) {
                $invalidProperties[] = "invalid value for 'alphaCcePreInstall', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['alphaCcePostInstall']) && (mb_strlen($this->container['alphaCcePostInstall']) > 10240)) {
                $invalidProperties[] = "invalid value for 'alphaCcePostInstall', the character length must be smaller than or equal to 10240.";
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
    * Gets maxPods
    *  **参数解释**： 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例。 该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 节点可以创建多少个Pod，受多个参数影响，具体请参见[节点可创建的最大Pod数量说明](maxPods.xml)。 **约束限制**： 不涉及 **取值范围**： 取值范围为16~256。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getMaxPods()
    {
        return $this->container['maxPods'];
    }

    /**
    * Sets maxPods
    *
    * @param int|null $maxPods **参数解释**： 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例。 该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 节点可以创建多少个Pod，受多个参数影响，具体请参见[节点可创建的最大Pod数量说明](maxPods.xml)。 **约束限制**： 不涉及 **取值范围**： 取值范围为16~256。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMaxPods($maxPods)
    {
        $this->container['maxPods'] = $maxPods;
        return $this;
    }

    /**
    * Gets dockerLvmConfigOverride
    *  **参数解释**： Docker数据盘配置项。  待迁移节点的磁盘类型须和创建时一致（即“DockerLVMConfigOverride”参数中“diskType”字段的值须和创建时一致），请确保单次接口调用时批量选择的节点磁盘类型一致。  默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  **约束限制**： 不涉及 **取值范围**： 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDockerLvmConfigOverride()
    {
        return $this->container['dockerLvmConfigOverride'];
    }

    /**
    * Sets dockerLvmConfigOverride
    *
    * @param string|null $dockerLvmConfigOverride **参数解释**： Docker数据盘配置项。  待迁移节点的磁盘类型须和创建时一致（即“DockerLVMConfigOverride”参数中“diskType”字段的值须和创建时一致），请确保单次接口调用时批量选择的节点磁盘类型一致。  默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  **约束限制**： 不涉及 **取值范围**： 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDockerLvmConfigOverride($dockerLvmConfigOverride)
    {
        $this->container['dockerLvmConfigOverride'] = $dockerLvmConfigOverride;
        return $this;
    }

    /**
    * Gets alphaCcePreInstall
    *  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlphaCcePreInstall()
    {
        return $this->container['alphaCcePreInstall'];
    }

    /**
    * Sets alphaCcePreInstall
    *
    * @param string|null $alphaCcePreInstall **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlphaCcePreInstall($alphaCcePreInstall)
    {
        $this->container['alphaCcePreInstall'] = $alphaCcePreInstall;
        return $this;
    }

    /**
    * Gets alphaCcePostInstall
    *  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlphaCcePostInstall()
    {
        return $this->container['alphaCcePostInstall'];
    }

    /**
    * Sets alphaCcePostInstall
    *
    * @param string|null $alphaCcePostInstall **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ``` **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlphaCcePostInstall($alphaCcePostInstall)
    {
        $this->container['alphaCcePostInstall'] = $alphaCcePostInstall;
        return $this;
    }

    /**
    * Gets alphaCceNodeImageId
    *  **参数解释**： 指定待切换目标操作系统所使用的用户镜像ID。 > 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。  **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlphaCceNodeImageId()
    {
        return $this->container['alphaCceNodeImageId'];
    }

    /**
    * Sets alphaCceNodeImageId
    *
    * @param string|null $alphaCceNodeImageId **参数解释**： 指定待切换目标操作系统所使用的用户镜像ID。 > 当指定“alpha.cce/NodeImageID”参数时，“os”参数必须和用户自定义镜像的操作系统一致。  **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlphaCceNodeImageId($alphaCceNodeImageId)
    {
        $this->container['alphaCceNodeImageId'] = $alphaCceNodeImageId;
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

