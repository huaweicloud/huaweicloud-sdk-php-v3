<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorExtraSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorExtraSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ecsperformancetype  云服务器规格的分类：  - normal：通用型 - cpuv1：计算I型 - cpuv2：计算II型 - highmem：内存优化型 - gpu：GPU加速型 - entry：通用入门型 - saphana：大内存型 - ultracpu：超高性能计算型 - diskintensive：磁盘增强型 - highio：超高I/O型 - fpga：FPGA加速型  > 说明：  - 早期注册的规格该字段为hws:performancetype。
    * hwnumaNodes  主机的物理cpu数量。
    * resourceType  资源类型。resource_type是为了区分云服务器的物理主机类型。
    * hpetSupport  弹性运服务器高精度时钟是否开启，开启为true，否则为false。（该字段是否返回根据云服务器规格而定）
    * instanceVnictype  网卡类型，值固定为“enhanced”，表示使用增强型网络的资源创建云服务器。
    * instanceVnicinstanceBandwidth  最大带宽，单位Mbps，最大值为10000。
    * instanceVnicmaxCount  最大网卡个数，最大为4。
    * quotalocalDisk  值格式为{type}:{count}:{size}:{safeFormat}，其中：  - type指磁盘类型，当前只支持hdd。 - count指本地磁盘数量，目前支持d1类型：3/6/12/24，d2类型：2/4/8/12/16/24，d3类型：2/4/8/12/16/24/28。 - size指单个磁盘容量，单位GB，目前只支持1675（实际磁盘大小为1800，格式化后可用大小为1675）。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持d1类型：FALSE，d2/d3类型：True。  > 说明：  - 磁盘增强型特有字段。
    * quotanvmeSsd  值格式为{type}:{spec}:{size}:{safeFormat}，其中：  - type指主机上配备的nvme ssd的单卡容量大小，当前只支持1.6T/3.2T。 - spec指nvme ssd的规格，包括large/small。large表示大规格，small表示小规格。目前仅支持i3类型：large。 - size指guest使用的盘的容量大小，单位为GB。在spec值为large的情况下，此项即为host单卡大小。在spec值为small的情况下，此为1/4规格或者1/2规格。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持i3类型：True。  > 说明：  - 超高I/O型特有字段。
    * extraSpeciopersistentGrant  是否支持持久化，值为true。  代表云服务器访问存储的方式为持久化授权。   > 说明：  - 密集存储D1型特有字段。
    * ecsgeneration  弹性云服务器类型的代数。  - s1：通用型I代 - s2：通用型II代 - s3：通用型 - m1：内存优化型I代 - m2：内存优化型II代 - m3：内存优化型 - h1：高性能计算型I代 - h2：高性能计算型II代 - h3：高性能计算型 - hi3：超高性能计算型 - d1：密集存储型I代 - d2：密集存储型II代 - d3：磁盘增强型 - g1：GPU加速型I代 - g2：GPU加速型II代 - f1：FPGA高性能型 - f2：FPGA通用型 - c3：通用计算增强型 - e3：大内存型 - i3：超高I/O型
    * ecsvirtualizationEnvTypes  虚拟化类型。  - 如果值为“FusionCompute”，表示弹性云服务器使用基于XEN的虚拟化技术。 - 如果值为“CloudCompute”，表示弹性云服务器使用基于KVM的虚拟化技术。
    * pciPassthroughenableGpu  显卡是否直通。  值为“true”，表示GPU直通。
    * pciPassthroughgpuSpecs  G1型和G2型云服务器应用的技术，包括GPU虚拟化和GPU直通。  - 如果该规格的云服务器使用GPU虚拟化技术，且GPU卡的型号为M60-1Q，参数值可设置为“m60_1q:virt:1”。 - 如果该规格的云服务器使用GPU直通技术，且GPU卡的型号为M60，参数值可设置为“m60:direct_graphics:1”。
    * pciPassthroughalias  P1型v本地直通GPU的型号和数量，参数值可设置为“nvidia-p100:1”，表示使用该规格创建的弹性云服务器将占用1张NVIDIA P100显卡。
    * condoperationstatus  此参数是Region级配置，某个AZ没有在cond:operation:az参数中配置时默认使用此参数的取值。不配置或无此参数时等同于“normal”。取值范围：  - normal：正常商用 - abandon：下线（即不显示） - sellout：售罄 - obt：公测 - promotion：推荐(等同normal，也是商用)
    * condoperationaz  此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与cond:operation:status参数相同。  例如：flavor在某个region的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：  - “cond:operation:status”设置为“abandon” - “cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(normal)”  > 说明：  - 如果flavor在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    * quotamaxRate  最大带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotaminRate  基准带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotamaxPps  内网最大收发包能力  - 单位个，显示为xx万时除以10000
    * condoperationcharge  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationchargestop  关机是否收费  - 关机是否计费，默认免费： - charge - free
    * condspotoperationaz  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationroles  允许的角色 匹配的用户标签（roles的op_gatexxx标签）。不设置时所有用户可见
    * condspotoperationstatus  Flavor在竞价销售模式下的状态  - 不配置时等同abandon - normal，正常商用 - abandon，下线 - sellout，售罄 - obt，公测，未申请时提示申请（暂不支持） - private，私有，只给特定用户显示（暂不支持） - test，试用/免费（暂不支持） - promotion，推荐
    * condnetwork  网络约束 支持网络特性，不配置时以UI配置为准。
    * condstorage  存储约束  - 支持磁盘特性，不配置时以UI配置为准。 - scsi，支持scsi - localdisk，支持本地盘 - ib，支持ib
    * condcomputeliveResizable  计算约束  - true，支持在线扩容。 - false或不存在该字段，不支持在线扩容。
    * condcompute  计算约束  - autorecovery，自动恢复特性。 - 不存在该字段，不支持自动恢复。
    * infogpuname  
    * infocpuname  
    * quotagpu  
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ecsperformancetype' => 'string',
            'hwnumaNodes' => 'string',
            'resourceType' => 'string',
            'hpetSupport' => 'string',
            'instanceVnictype' => 'string',
            'instanceVnicinstanceBandwidth' => 'string',
            'instanceVnicmaxCount' => 'string',
            'quotalocalDisk' => 'string',
            'quotanvmeSsd' => 'string',
            'extraSpeciopersistentGrant' => 'string',
            'ecsgeneration' => 'string',
            'ecsvirtualizationEnvTypes' => 'string',
            'pciPassthroughenableGpu' => 'string',
            'pciPassthroughgpuSpecs' => 'string',
            'pciPassthroughalias' => 'string',
            'condoperationstatus' => 'string',
            'condoperationaz' => 'string',
            'quotamaxRate' => 'string',
            'quotaminRate' => 'string',
            'quotamaxPps' => 'string',
            'condoperationcharge' => 'string',
            'condoperationchargestop' => 'string',
            'condspotoperationaz' => 'string',
            'condoperationroles' => 'string',
            'condspotoperationstatus' => 'string',
            'condnetwork' => 'string',
            'condstorage' => 'string',
            'condcomputeliveResizable' => 'string',
            'condcompute' => 'string',
            'infogpuname' => 'string',
            'infocpuname' => 'string',
            'quotagpu' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ecsperformancetype  云服务器规格的分类：  - normal：通用型 - cpuv1：计算I型 - cpuv2：计算II型 - highmem：内存优化型 - gpu：GPU加速型 - entry：通用入门型 - saphana：大内存型 - ultracpu：超高性能计算型 - diskintensive：磁盘增强型 - highio：超高I/O型 - fpga：FPGA加速型  > 说明：  - 早期注册的规格该字段为hws:performancetype。
    * hwnumaNodes  主机的物理cpu数量。
    * resourceType  资源类型。resource_type是为了区分云服务器的物理主机类型。
    * hpetSupport  弹性运服务器高精度时钟是否开启，开启为true，否则为false。（该字段是否返回根据云服务器规格而定）
    * instanceVnictype  网卡类型，值固定为“enhanced”，表示使用增强型网络的资源创建云服务器。
    * instanceVnicinstanceBandwidth  最大带宽，单位Mbps，最大值为10000。
    * instanceVnicmaxCount  最大网卡个数，最大为4。
    * quotalocalDisk  值格式为{type}:{count}:{size}:{safeFormat}，其中：  - type指磁盘类型，当前只支持hdd。 - count指本地磁盘数量，目前支持d1类型：3/6/12/24，d2类型：2/4/8/12/16/24，d3类型：2/4/8/12/16/24/28。 - size指单个磁盘容量，单位GB，目前只支持1675（实际磁盘大小为1800，格式化后可用大小为1675）。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持d1类型：FALSE，d2/d3类型：True。  > 说明：  - 磁盘增强型特有字段。
    * quotanvmeSsd  值格式为{type}:{spec}:{size}:{safeFormat}，其中：  - type指主机上配备的nvme ssd的单卡容量大小，当前只支持1.6T/3.2T。 - spec指nvme ssd的规格，包括large/small。large表示大规格，small表示小规格。目前仅支持i3类型：large。 - size指guest使用的盘的容量大小，单位为GB。在spec值为large的情况下，此项即为host单卡大小。在spec值为small的情况下，此为1/4规格或者1/2规格。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持i3类型：True。  > 说明：  - 超高I/O型特有字段。
    * extraSpeciopersistentGrant  是否支持持久化，值为true。  代表云服务器访问存储的方式为持久化授权。   > 说明：  - 密集存储D1型特有字段。
    * ecsgeneration  弹性云服务器类型的代数。  - s1：通用型I代 - s2：通用型II代 - s3：通用型 - m1：内存优化型I代 - m2：内存优化型II代 - m3：内存优化型 - h1：高性能计算型I代 - h2：高性能计算型II代 - h3：高性能计算型 - hi3：超高性能计算型 - d1：密集存储型I代 - d2：密集存储型II代 - d3：磁盘增强型 - g1：GPU加速型I代 - g2：GPU加速型II代 - f1：FPGA高性能型 - f2：FPGA通用型 - c3：通用计算增强型 - e3：大内存型 - i3：超高I/O型
    * ecsvirtualizationEnvTypes  虚拟化类型。  - 如果值为“FusionCompute”，表示弹性云服务器使用基于XEN的虚拟化技术。 - 如果值为“CloudCompute”，表示弹性云服务器使用基于KVM的虚拟化技术。
    * pciPassthroughenableGpu  显卡是否直通。  值为“true”，表示GPU直通。
    * pciPassthroughgpuSpecs  G1型和G2型云服务器应用的技术，包括GPU虚拟化和GPU直通。  - 如果该规格的云服务器使用GPU虚拟化技术，且GPU卡的型号为M60-1Q，参数值可设置为“m60_1q:virt:1”。 - 如果该规格的云服务器使用GPU直通技术，且GPU卡的型号为M60，参数值可设置为“m60:direct_graphics:1”。
    * pciPassthroughalias  P1型v本地直通GPU的型号和数量，参数值可设置为“nvidia-p100:1”，表示使用该规格创建的弹性云服务器将占用1张NVIDIA P100显卡。
    * condoperationstatus  此参数是Region级配置，某个AZ没有在cond:operation:az参数中配置时默认使用此参数的取值。不配置或无此参数时等同于“normal”。取值范围：  - normal：正常商用 - abandon：下线（即不显示） - sellout：售罄 - obt：公测 - promotion：推荐(等同normal，也是商用)
    * condoperationaz  此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与cond:operation:status参数相同。  例如：flavor在某个region的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：  - “cond:operation:status”设置为“abandon” - “cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(normal)”  > 说明：  - 如果flavor在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    * quotamaxRate  最大带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotaminRate  基准带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotamaxPps  内网最大收发包能力  - 单位个，显示为xx万时除以10000
    * condoperationcharge  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationchargestop  关机是否收费  - 关机是否计费，默认免费： - charge - free
    * condspotoperationaz  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationroles  允许的角色 匹配的用户标签（roles的op_gatexxx标签）。不设置时所有用户可见
    * condspotoperationstatus  Flavor在竞价销售模式下的状态  - 不配置时等同abandon - normal，正常商用 - abandon，下线 - sellout，售罄 - obt，公测，未申请时提示申请（暂不支持） - private，私有，只给特定用户显示（暂不支持） - test，试用/免费（暂不支持） - promotion，推荐
    * condnetwork  网络约束 支持网络特性，不配置时以UI配置为准。
    * condstorage  存储约束  - 支持磁盘特性，不配置时以UI配置为准。 - scsi，支持scsi - localdisk，支持本地盘 - ib，支持ib
    * condcomputeliveResizable  计算约束  - true，支持在线扩容。 - false或不存在该字段，不支持在线扩容。
    * condcompute  计算约束  - autorecovery，自动恢复特性。 - 不存在该字段，不支持自动恢复。
    * infogpuname  
    * infocpuname  
    * quotagpu  
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ecsperformancetype' => null,
        'hwnumaNodes' => null,
        'resourceType' => null,
        'hpetSupport' => null,
        'instanceVnictype' => null,
        'instanceVnicinstanceBandwidth' => null,
        'instanceVnicmaxCount' => null,
        'quotalocalDisk' => null,
        'quotanvmeSsd' => null,
        'extraSpeciopersistentGrant' => null,
        'ecsgeneration' => null,
        'ecsvirtualizationEnvTypes' => null,
        'pciPassthroughenableGpu' => null,
        'pciPassthroughgpuSpecs' => null,
        'pciPassthroughalias' => null,
        'condoperationstatus' => null,
        'condoperationaz' => null,
        'quotamaxRate' => null,
        'quotaminRate' => null,
        'quotamaxPps' => null,
        'condoperationcharge' => null,
        'condoperationchargestop' => null,
        'condspotoperationaz' => null,
        'condoperationroles' => null,
        'condspotoperationstatus' => null,
        'condnetwork' => null,
        'condstorage' => null,
        'condcomputeliveResizable' => null,
        'condcompute' => null,
        'infogpuname' => null,
        'infocpuname' => null,
        'quotagpu' => null
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
    * ecsperformancetype  云服务器规格的分类：  - normal：通用型 - cpuv1：计算I型 - cpuv2：计算II型 - highmem：内存优化型 - gpu：GPU加速型 - entry：通用入门型 - saphana：大内存型 - ultracpu：超高性能计算型 - diskintensive：磁盘增强型 - highio：超高I/O型 - fpga：FPGA加速型  > 说明：  - 早期注册的规格该字段为hws:performancetype。
    * hwnumaNodes  主机的物理cpu数量。
    * resourceType  资源类型。resource_type是为了区分云服务器的物理主机类型。
    * hpetSupport  弹性运服务器高精度时钟是否开启，开启为true，否则为false。（该字段是否返回根据云服务器规格而定）
    * instanceVnictype  网卡类型，值固定为“enhanced”，表示使用增强型网络的资源创建云服务器。
    * instanceVnicinstanceBandwidth  最大带宽，单位Mbps，最大值为10000。
    * instanceVnicmaxCount  最大网卡个数，最大为4。
    * quotalocalDisk  值格式为{type}:{count}:{size}:{safeFormat}，其中：  - type指磁盘类型，当前只支持hdd。 - count指本地磁盘数量，目前支持d1类型：3/6/12/24，d2类型：2/4/8/12/16/24，d3类型：2/4/8/12/16/24/28。 - size指单个磁盘容量，单位GB，目前只支持1675（实际磁盘大小为1800，格式化后可用大小为1675）。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持d1类型：FALSE，d2/d3类型：True。  > 说明：  - 磁盘增强型特有字段。
    * quotanvmeSsd  值格式为{type}:{spec}:{size}:{safeFormat}，其中：  - type指主机上配备的nvme ssd的单卡容量大小，当前只支持1.6T/3.2T。 - spec指nvme ssd的规格，包括large/small。large表示大规格，small表示小规格。目前仅支持i3类型：large。 - size指guest使用的盘的容量大小，单位为GB。在spec值为large的情况下，此项即为host单卡大小。在spec值为small的情况下，此为1/4规格或者1/2规格。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持i3类型：True。  > 说明：  - 超高I/O型特有字段。
    * extraSpeciopersistentGrant  是否支持持久化，值为true。  代表云服务器访问存储的方式为持久化授权。   > 说明：  - 密集存储D1型特有字段。
    * ecsgeneration  弹性云服务器类型的代数。  - s1：通用型I代 - s2：通用型II代 - s3：通用型 - m1：内存优化型I代 - m2：内存优化型II代 - m3：内存优化型 - h1：高性能计算型I代 - h2：高性能计算型II代 - h3：高性能计算型 - hi3：超高性能计算型 - d1：密集存储型I代 - d2：密集存储型II代 - d3：磁盘增强型 - g1：GPU加速型I代 - g2：GPU加速型II代 - f1：FPGA高性能型 - f2：FPGA通用型 - c3：通用计算增强型 - e3：大内存型 - i3：超高I/O型
    * ecsvirtualizationEnvTypes  虚拟化类型。  - 如果值为“FusionCompute”，表示弹性云服务器使用基于XEN的虚拟化技术。 - 如果值为“CloudCompute”，表示弹性云服务器使用基于KVM的虚拟化技术。
    * pciPassthroughenableGpu  显卡是否直通。  值为“true”，表示GPU直通。
    * pciPassthroughgpuSpecs  G1型和G2型云服务器应用的技术，包括GPU虚拟化和GPU直通。  - 如果该规格的云服务器使用GPU虚拟化技术，且GPU卡的型号为M60-1Q，参数值可设置为“m60_1q:virt:1”。 - 如果该规格的云服务器使用GPU直通技术，且GPU卡的型号为M60，参数值可设置为“m60:direct_graphics:1”。
    * pciPassthroughalias  P1型v本地直通GPU的型号和数量，参数值可设置为“nvidia-p100:1”，表示使用该规格创建的弹性云服务器将占用1张NVIDIA P100显卡。
    * condoperationstatus  此参数是Region级配置，某个AZ没有在cond:operation:az参数中配置时默认使用此参数的取值。不配置或无此参数时等同于“normal”。取值范围：  - normal：正常商用 - abandon：下线（即不显示） - sellout：售罄 - obt：公测 - promotion：推荐(等同normal，也是商用)
    * condoperationaz  此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与cond:operation:status参数相同。  例如：flavor在某个region的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：  - “cond:operation:status”设置为“abandon” - “cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(normal)”  > 说明：  - 如果flavor在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    * quotamaxRate  最大带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotaminRate  基准带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotamaxPps  内网最大收发包能力  - 单位个，显示为xx万时除以10000
    * condoperationcharge  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationchargestop  关机是否收费  - 关机是否计费，默认免费： - charge - free
    * condspotoperationaz  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationroles  允许的角色 匹配的用户标签（roles的op_gatexxx标签）。不设置时所有用户可见
    * condspotoperationstatus  Flavor在竞价销售模式下的状态  - 不配置时等同abandon - normal，正常商用 - abandon，下线 - sellout，售罄 - obt，公测，未申请时提示申请（暂不支持） - private，私有，只给特定用户显示（暂不支持） - test，试用/免费（暂不支持） - promotion，推荐
    * condnetwork  网络约束 支持网络特性，不配置时以UI配置为准。
    * condstorage  存储约束  - 支持磁盘特性，不配置时以UI配置为准。 - scsi，支持scsi - localdisk，支持本地盘 - ib，支持ib
    * condcomputeliveResizable  计算约束  - true，支持在线扩容。 - false或不存在该字段，不支持在线扩容。
    * condcompute  计算约束  - autorecovery，自动恢复特性。 - 不存在该字段，不支持自动恢复。
    * infogpuname  
    * infocpuname  
    * quotagpu  
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ecsperformancetype' => 'ecs:performancetype',
            'hwnumaNodes' => 'hw:numa_nodes',
            'resourceType' => 'resource_type',
            'hpetSupport' => 'hpet_support',
            'instanceVnictype' => 'instance_vnic:type',
            'instanceVnicinstanceBandwidth' => 'instance_vnic:instance_bandwidth',
            'instanceVnicmaxCount' => 'instance_vnic:max_count',
            'quotalocalDisk' => 'quota:local_disk',
            'quotanvmeSsd' => 'quota:nvme_ssd',
            'extraSpeciopersistentGrant' => 'extra_spec:io:persistent_grant',
            'ecsgeneration' => 'ecs:generation',
            'ecsvirtualizationEnvTypes' => 'ecs:virtualization_env_types',
            'pciPassthroughenableGpu' => 'pci_passthrough:enable_gpu',
            'pciPassthroughgpuSpecs' => 'pci_passthrough:gpu_specs',
            'pciPassthroughalias' => 'pci_passthrough:alias',
            'condoperationstatus' => 'cond:operation:status',
            'condoperationaz' => 'cond:operation:az',
            'quotamaxRate' => 'quota:max_rate',
            'quotaminRate' => 'quota:min_rate',
            'quotamaxPps' => 'quota:max_pps',
            'condoperationcharge' => 'cond:operation:charge',
            'condoperationchargestop' => 'cond:operation:charge:stop',
            'condspotoperationaz' => 'cond:spot:operation:az',
            'condoperationroles' => 'cond:operation:roles',
            'condspotoperationstatus' => 'cond:spot:operation:status',
            'condnetwork' => 'cond:network',
            'condstorage' => 'cond:storage',
            'condcomputeliveResizable' => 'cond:compute:live_resizable',
            'condcompute' => 'cond:compute',
            'infogpuname' => 'info:gpu:name',
            'infocpuname' => 'info:cpu:name',
            'quotagpu' => 'quota:gpu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ecsperformancetype  云服务器规格的分类：  - normal：通用型 - cpuv1：计算I型 - cpuv2：计算II型 - highmem：内存优化型 - gpu：GPU加速型 - entry：通用入门型 - saphana：大内存型 - ultracpu：超高性能计算型 - diskintensive：磁盘增强型 - highio：超高I/O型 - fpga：FPGA加速型  > 说明：  - 早期注册的规格该字段为hws:performancetype。
    * hwnumaNodes  主机的物理cpu数量。
    * resourceType  资源类型。resource_type是为了区分云服务器的物理主机类型。
    * hpetSupport  弹性运服务器高精度时钟是否开启，开启为true，否则为false。（该字段是否返回根据云服务器规格而定）
    * instanceVnictype  网卡类型，值固定为“enhanced”，表示使用增强型网络的资源创建云服务器。
    * instanceVnicinstanceBandwidth  最大带宽，单位Mbps，最大值为10000。
    * instanceVnicmaxCount  最大网卡个数，最大为4。
    * quotalocalDisk  值格式为{type}:{count}:{size}:{safeFormat}，其中：  - type指磁盘类型，当前只支持hdd。 - count指本地磁盘数量，目前支持d1类型：3/6/12/24，d2类型：2/4/8/12/16/24，d3类型：2/4/8/12/16/24/28。 - size指单个磁盘容量，单位GB，目前只支持1675（实际磁盘大小为1800，格式化后可用大小为1675）。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持d1类型：FALSE，d2/d3类型：True。  > 说明：  - 磁盘增强型特有字段。
    * quotanvmeSsd  值格式为{type}:{spec}:{size}:{safeFormat}，其中：  - type指主机上配备的nvme ssd的单卡容量大小，当前只支持1.6T/3.2T。 - spec指nvme ssd的规格，包括large/small。large表示大规格，small表示小规格。目前仅支持i3类型：large。 - size指guest使用的盘的容量大小，单位为GB。在spec值为large的情况下，此项即为host单卡大小。在spec值为small的情况下，此为1/4规格或者1/2规格。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持i3类型：True。  > 说明：  - 超高I/O型特有字段。
    * extraSpeciopersistentGrant  是否支持持久化，值为true。  代表云服务器访问存储的方式为持久化授权。   > 说明：  - 密集存储D1型特有字段。
    * ecsgeneration  弹性云服务器类型的代数。  - s1：通用型I代 - s2：通用型II代 - s3：通用型 - m1：内存优化型I代 - m2：内存优化型II代 - m3：内存优化型 - h1：高性能计算型I代 - h2：高性能计算型II代 - h3：高性能计算型 - hi3：超高性能计算型 - d1：密集存储型I代 - d2：密集存储型II代 - d3：磁盘增强型 - g1：GPU加速型I代 - g2：GPU加速型II代 - f1：FPGA高性能型 - f2：FPGA通用型 - c3：通用计算增强型 - e3：大内存型 - i3：超高I/O型
    * ecsvirtualizationEnvTypes  虚拟化类型。  - 如果值为“FusionCompute”，表示弹性云服务器使用基于XEN的虚拟化技术。 - 如果值为“CloudCompute”，表示弹性云服务器使用基于KVM的虚拟化技术。
    * pciPassthroughenableGpu  显卡是否直通。  值为“true”，表示GPU直通。
    * pciPassthroughgpuSpecs  G1型和G2型云服务器应用的技术，包括GPU虚拟化和GPU直通。  - 如果该规格的云服务器使用GPU虚拟化技术，且GPU卡的型号为M60-1Q，参数值可设置为“m60_1q:virt:1”。 - 如果该规格的云服务器使用GPU直通技术，且GPU卡的型号为M60，参数值可设置为“m60:direct_graphics:1”。
    * pciPassthroughalias  P1型v本地直通GPU的型号和数量，参数值可设置为“nvidia-p100:1”，表示使用该规格创建的弹性云服务器将占用1张NVIDIA P100显卡。
    * condoperationstatus  此参数是Region级配置，某个AZ没有在cond:operation:az参数中配置时默认使用此参数的取值。不配置或无此参数时等同于“normal”。取值范围：  - normal：正常商用 - abandon：下线（即不显示） - sellout：售罄 - obt：公测 - promotion：推荐(等同normal，也是商用)
    * condoperationaz  此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与cond:operation:status参数相同。  例如：flavor在某个region的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：  - “cond:operation:status”设置为“abandon” - “cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(normal)”  > 说明：  - 如果flavor在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    * quotamaxRate  最大带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotaminRate  基准带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotamaxPps  内网最大收发包能力  - 单位个，显示为xx万时除以10000
    * condoperationcharge  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationchargestop  关机是否收费  - 关机是否计费，默认免费： - charge - free
    * condspotoperationaz  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationroles  允许的角色 匹配的用户标签（roles的op_gatexxx标签）。不设置时所有用户可见
    * condspotoperationstatus  Flavor在竞价销售模式下的状态  - 不配置时等同abandon - normal，正常商用 - abandon，下线 - sellout，售罄 - obt，公测，未申请时提示申请（暂不支持） - private，私有，只给特定用户显示（暂不支持） - test，试用/免费（暂不支持） - promotion，推荐
    * condnetwork  网络约束 支持网络特性，不配置时以UI配置为准。
    * condstorage  存储约束  - 支持磁盘特性，不配置时以UI配置为准。 - scsi，支持scsi - localdisk，支持本地盘 - ib，支持ib
    * condcomputeliveResizable  计算约束  - true，支持在线扩容。 - false或不存在该字段，不支持在线扩容。
    * condcompute  计算约束  - autorecovery，自动恢复特性。 - 不存在该字段，不支持自动恢复。
    * infogpuname  
    * infocpuname  
    * quotagpu  
    *
    * @var string[]
    */
    protected static $setters = [
            'ecsperformancetype' => 'setEcsperformancetype',
            'hwnumaNodes' => 'setHwnumaNodes',
            'resourceType' => 'setResourceType',
            'hpetSupport' => 'setHpetSupport',
            'instanceVnictype' => 'setInstanceVnictype',
            'instanceVnicinstanceBandwidth' => 'setInstanceVnicinstanceBandwidth',
            'instanceVnicmaxCount' => 'setInstanceVnicmaxCount',
            'quotalocalDisk' => 'setQuotalocalDisk',
            'quotanvmeSsd' => 'setQuotanvmeSsd',
            'extraSpeciopersistentGrant' => 'setExtraSpeciopersistentGrant',
            'ecsgeneration' => 'setEcsgeneration',
            'ecsvirtualizationEnvTypes' => 'setEcsvirtualizationEnvTypes',
            'pciPassthroughenableGpu' => 'setPciPassthroughenableGpu',
            'pciPassthroughgpuSpecs' => 'setPciPassthroughgpuSpecs',
            'pciPassthroughalias' => 'setPciPassthroughalias',
            'condoperationstatus' => 'setCondoperationstatus',
            'condoperationaz' => 'setCondoperationaz',
            'quotamaxRate' => 'setQuotamaxRate',
            'quotaminRate' => 'setQuotaminRate',
            'quotamaxPps' => 'setQuotamaxPps',
            'condoperationcharge' => 'setCondoperationcharge',
            'condoperationchargestop' => 'setCondoperationchargestop',
            'condspotoperationaz' => 'setCondspotoperationaz',
            'condoperationroles' => 'setCondoperationroles',
            'condspotoperationstatus' => 'setCondspotoperationstatus',
            'condnetwork' => 'setCondnetwork',
            'condstorage' => 'setCondstorage',
            'condcomputeliveResizable' => 'setCondcomputeliveResizable',
            'condcompute' => 'setCondcompute',
            'infogpuname' => 'setInfogpuname',
            'infocpuname' => 'setInfocpuname',
            'quotagpu' => 'setQuotagpu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ecsperformancetype  云服务器规格的分类：  - normal：通用型 - cpuv1：计算I型 - cpuv2：计算II型 - highmem：内存优化型 - gpu：GPU加速型 - entry：通用入门型 - saphana：大内存型 - ultracpu：超高性能计算型 - diskintensive：磁盘增强型 - highio：超高I/O型 - fpga：FPGA加速型  > 说明：  - 早期注册的规格该字段为hws:performancetype。
    * hwnumaNodes  主机的物理cpu数量。
    * resourceType  资源类型。resource_type是为了区分云服务器的物理主机类型。
    * hpetSupport  弹性运服务器高精度时钟是否开启，开启为true，否则为false。（该字段是否返回根据云服务器规格而定）
    * instanceVnictype  网卡类型，值固定为“enhanced”，表示使用增强型网络的资源创建云服务器。
    * instanceVnicinstanceBandwidth  最大带宽，单位Mbps，最大值为10000。
    * instanceVnicmaxCount  最大网卡个数，最大为4。
    * quotalocalDisk  值格式为{type}:{count}:{size}:{safeFormat}，其中：  - type指磁盘类型，当前只支持hdd。 - count指本地磁盘数量，目前支持d1类型：3/6/12/24，d2类型：2/4/8/12/16/24，d3类型：2/4/8/12/16/24/28。 - size指单个磁盘容量，单位GB，目前只支持1675（实际磁盘大小为1800，格式化后可用大小为1675）。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持d1类型：FALSE，d2/d3类型：True。  > 说明：  - 磁盘增强型特有字段。
    * quotanvmeSsd  值格式为{type}:{spec}:{size}:{safeFormat}，其中：  - type指主机上配备的nvme ssd的单卡容量大小，当前只支持1.6T/3.2T。 - spec指nvme ssd的规格，包括large/small。large表示大规格，small表示小规格。目前仅支持i3类型：large。 - size指guest使用的盘的容量大小，单位为GB。在spec值为large的情况下，此项即为host单卡大小。在spec值为small的情况下，此为1/4规格或者1/2规格。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持i3类型：True。  > 说明：  - 超高I/O型特有字段。
    * extraSpeciopersistentGrant  是否支持持久化，值为true。  代表云服务器访问存储的方式为持久化授权。   > 说明：  - 密集存储D1型特有字段。
    * ecsgeneration  弹性云服务器类型的代数。  - s1：通用型I代 - s2：通用型II代 - s3：通用型 - m1：内存优化型I代 - m2：内存优化型II代 - m3：内存优化型 - h1：高性能计算型I代 - h2：高性能计算型II代 - h3：高性能计算型 - hi3：超高性能计算型 - d1：密集存储型I代 - d2：密集存储型II代 - d3：磁盘增强型 - g1：GPU加速型I代 - g2：GPU加速型II代 - f1：FPGA高性能型 - f2：FPGA通用型 - c3：通用计算增强型 - e3：大内存型 - i3：超高I/O型
    * ecsvirtualizationEnvTypes  虚拟化类型。  - 如果值为“FusionCompute”，表示弹性云服务器使用基于XEN的虚拟化技术。 - 如果值为“CloudCompute”，表示弹性云服务器使用基于KVM的虚拟化技术。
    * pciPassthroughenableGpu  显卡是否直通。  值为“true”，表示GPU直通。
    * pciPassthroughgpuSpecs  G1型和G2型云服务器应用的技术，包括GPU虚拟化和GPU直通。  - 如果该规格的云服务器使用GPU虚拟化技术，且GPU卡的型号为M60-1Q，参数值可设置为“m60_1q:virt:1”。 - 如果该规格的云服务器使用GPU直通技术，且GPU卡的型号为M60，参数值可设置为“m60:direct_graphics:1”。
    * pciPassthroughalias  P1型v本地直通GPU的型号和数量，参数值可设置为“nvidia-p100:1”，表示使用该规格创建的弹性云服务器将占用1张NVIDIA P100显卡。
    * condoperationstatus  此参数是Region级配置，某个AZ没有在cond:operation:az参数中配置时默认使用此参数的取值。不配置或无此参数时等同于“normal”。取值范围：  - normal：正常商用 - abandon：下线（即不显示） - sellout：售罄 - obt：公测 - promotion：推荐(等同normal，也是商用)
    * condoperationaz  此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与cond:operation:status参数相同。  例如：flavor在某个region的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：  - “cond:operation:status”设置为“abandon” - “cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(normal)”  > 说明：  - 如果flavor在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    * quotamaxRate  最大带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotaminRate  基准带宽  - 单位Mbps，显示为Gbps时除以1000
    * quotamaxPps  内网最大收发包能力  - 单位个，显示为xx万时除以10000
    * condoperationcharge  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationchargestop  关机是否收费  - 关机是否计费，默认免费： - charge - free
    * condspotoperationaz  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    * condoperationroles  允许的角色 匹配的用户标签（roles的op_gatexxx标签）。不设置时所有用户可见
    * condspotoperationstatus  Flavor在竞价销售模式下的状态  - 不配置时等同abandon - normal，正常商用 - abandon，下线 - sellout，售罄 - obt，公测，未申请时提示申请（暂不支持） - private，私有，只给特定用户显示（暂不支持） - test，试用/免费（暂不支持） - promotion，推荐
    * condnetwork  网络约束 支持网络特性，不配置时以UI配置为准。
    * condstorage  存储约束  - 支持磁盘特性，不配置时以UI配置为准。 - scsi，支持scsi - localdisk，支持本地盘 - ib，支持ib
    * condcomputeliveResizable  计算约束  - true，支持在线扩容。 - false或不存在该字段，不支持在线扩容。
    * condcompute  计算约束  - autorecovery，自动恢复特性。 - 不存在该字段，不支持自动恢复。
    * infogpuname  
    * infocpuname  
    * quotagpu  
    *
    * @var string[]
    */
    protected static $getters = [
            'ecsperformancetype' => 'getEcsperformancetype',
            'hwnumaNodes' => 'getHwnumaNodes',
            'resourceType' => 'getResourceType',
            'hpetSupport' => 'getHpetSupport',
            'instanceVnictype' => 'getInstanceVnictype',
            'instanceVnicinstanceBandwidth' => 'getInstanceVnicinstanceBandwidth',
            'instanceVnicmaxCount' => 'getInstanceVnicmaxCount',
            'quotalocalDisk' => 'getQuotalocalDisk',
            'quotanvmeSsd' => 'getQuotanvmeSsd',
            'extraSpeciopersistentGrant' => 'getExtraSpeciopersistentGrant',
            'ecsgeneration' => 'getEcsgeneration',
            'ecsvirtualizationEnvTypes' => 'getEcsvirtualizationEnvTypes',
            'pciPassthroughenableGpu' => 'getPciPassthroughenableGpu',
            'pciPassthroughgpuSpecs' => 'getPciPassthroughgpuSpecs',
            'pciPassthroughalias' => 'getPciPassthroughalias',
            'condoperationstatus' => 'getCondoperationstatus',
            'condoperationaz' => 'getCondoperationaz',
            'quotamaxRate' => 'getQuotamaxRate',
            'quotaminRate' => 'getQuotaminRate',
            'quotamaxPps' => 'getQuotamaxPps',
            'condoperationcharge' => 'getCondoperationcharge',
            'condoperationchargestop' => 'getCondoperationchargestop',
            'condspotoperationaz' => 'getCondspotoperationaz',
            'condoperationroles' => 'getCondoperationroles',
            'condspotoperationstatus' => 'getCondspotoperationstatus',
            'condnetwork' => 'getCondnetwork',
            'condstorage' => 'getCondstorage',
            'condcomputeliveResizable' => 'getCondcomputeliveResizable',
            'condcompute' => 'getCondcompute',
            'infogpuname' => 'getInfogpuname',
            'infocpuname' => 'getInfocpuname',
            'quotagpu' => 'getQuotagpu'
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
        $this->container['ecsperformancetype'] = isset($data['ecsperformancetype']) ? $data['ecsperformancetype'] : null;
        $this->container['hwnumaNodes'] = isset($data['hwnumaNodes']) ? $data['hwnumaNodes'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['hpetSupport'] = isset($data['hpetSupport']) ? $data['hpetSupport'] : null;
        $this->container['instanceVnictype'] = isset($data['instanceVnictype']) ? $data['instanceVnictype'] : null;
        $this->container['instanceVnicinstanceBandwidth'] = isset($data['instanceVnicinstanceBandwidth']) ? $data['instanceVnicinstanceBandwidth'] : null;
        $this->container['instanceVnicmaxCount'] = isset($data['instanceVnicmaxCount']) ? $data['instanceVnicmaxCount'] : null;
        $this->container['quotalocalDisk'] = isset($data['quotalocalDisk']) ? $data['quotalocalDisk'] : null;
        $this->container['quotanvmeSsd'] = isset($data['quotanvmeSsd']) ? $data['quotanvmeSsd'] : null;
        $this->container['extraSpeciopersistentGrant'] = isset($data['extraSpeciopersistentGrant']) ? $data['extraSpeciopersistentGrant'] : null;
        $this->container['ecsgeneration'] = isset($data['ecsgeneration']) ? $data['ecsgeneration'] : null;
        $this->container['ecsvirtualizationEnvTypes'] = isset($data['ecsvirtualizationEnvTypes']) ? $data['ecsvirtualizationEnvTypes'] : null;
        $this->container['pciPassthroughenableGpu'] = isset($data['pciPassthroughenableGpu']) ? $data['pciPassthroughenableGpu'] : null;
        $this->container['pciPassthroughgpuSpecs'] = isset($data['pciPassthroughgpuSpecs']) ? $data['pciPassthroughgpuSpecs'] : null;
        $this->container['pciPassthroughalias'] = isset($data['pciPassthroughalias']) ? $data['pciPassthroughalias'] : null;
        $this->container['condoperationstatus'] = isset($data['condoperationstatus']) ? $data['condoperationstatus'] : null;
        $this->container['condoperationaz'] = isset($data['condoperationaz']) ? $data['condoperationaz'] : null;
        $this->container['quotamaxRate'] = isset($data['quotamaxRate']) ? $data['quotamaxRate'] : null;
        $this->container['quotaminRate'] = isset($data['quotaminRate']) ? $data['quotaminRate'] : null;
        $this->container['quotamaxPps'] = isset($data['quotamaxPps']) ? $data['quotamaxPps'] : null;
        $this->container['condoperationcharge'] = isset($data['condoperationcharge']) ? $data['condoperationcharge'] : null;
        $this->container['condoperationchargestop'] = isset($data['condoperationchargestop']) ? $data['condoperationchargestop'] : 'free';
        $this->container['condspotoperationaz'] = isset($data['condspotoperationaz']) ? $data['condspotoperationaz'] : null;
        $this->container['condoperationroles'] = isset($data['condoperationroles']) ? $data['condoperationroles'] : null;
        $this->container['condspotoperationstatus'] = isset($data['condspotoperationstatus']) ? $data['condspotoperationstatus'] : null;
        $this->container['condnetwork'] = isset($data['condnetwork']) ? $data['condnetwork'] : null;
        $this->container['condstorage'] = isset($data['condstorage']) ? $data['condstorage'] : null;
        $this->container['condcomputeliveResizable'] = isset($data['condcomputeliveResizable']) ? $data['condcomputeliveResizable'] : null;
        $this->container['condcompute'] = isset($data['condcompute']) ? $data['condcompute'] : null;
        $this->container['infogpuname'] = isset($data['infogpuname']) ? $data['infogpuname'] : null;
        $this->container['infocpuname'] = isset($data['infocpuname']) ? $data['infocpuname'] : null;
        $this->container['quotagpu'] = isset($data['quotagpu']) ? $data['quotagpu'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ecsperformancetype'] === null) {
            $invalidProperties[] = "'ecsperformancetype' can't be null";
        }
        if ($this->container['hwnumaNodes'] === null) {
            $invalidProperties[] = "'hwnumaNodes' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['hpetSupport'] === null) {
            $invalidProperties[] = "'hpetSupport' can't be null";
        }
        if ($this->container['instanceVnictype'] === null) {
            $invalidProperties[] = "'instanceVnictype' can't be null";
        }
        if ($this->container['instanceVnicinstanceBandwidth'] === null) {
            $invalidProperties[] = "'instanceVnicinstanceBandwidth' can't be null";
        }
        if ($this->container['instanceVnicmaxCount'] === null) {
            $invalidProperties[] = "'instanceVnicmaxCount' can't be null";
        }
        if ($this->container['pciPassthroughenableGpu'] === null) {
            $invalidProperties[] = "'pciPassthroughenableGpu' can't be null";
        }
        if ($this->container['pciPassthroughgpuSpecs'] === null) {
            $invalidProperties[] = "'pciPassthroughgpuSpecs' can't be null";
        }
        if ($this->container['pciPassthroughalias'] === null) {
            $invalidProperties[] = "'pciPassthroughalias' can't be null";
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
    * Gets ecsperformancetype
    *  云服务器规格的分类：  - normal：通用型 - cpuv1：计算I型 - cpuv2：计算II型 - highmem：内存优化型 - gpu：GPU加速型 - entry：通用入门型 - saphana：大内存型 - ultracpu：超高性能计算型 - diskintensive：磁盘增强型 - highio：超高I/O型 - fpga：FPGA加速型  > 说明：  - 早期注册的规格该字段为hws:performancetype。
    *
    * @return string
    */
    public function getEcsperformancetype()
    {
        return $this->container['ecsperformancetype'];
    }

    /**
    * Sets ecsperformancetype
    *
    * @param string $ecsperformancetype 云服务器规格的分类：  - normal：通用型 - cpuv1：计算I型 - cpuv2：计算II型 - highmem：内存优化型 - gpu：GPU加速型 - entry：通用入门型 - saphana：大内存型 - ultracpu：超高性能计算型 - diskintensive：磁盘增强型 - highio：超高I/O型 - fpga：FPGA加速型  > 说明：  - 早期注册的规格该字段为hws:performancetype。
    *
    * @return $this
    */
    public function setEcsperformancetype($ecsperformancetype)
    {
        $this->container['ecsperformancetype'] = $ecsperformancetype;
        return $this;
    }

    /**
    * Gets hwnumaNodes
    *  主机的物理cpu数量。
    *
    * @return string
    */
    public function getHwnumaNodes()
    {
        return $this->container['hwnumaNodes'];
    }

    /**
    * Sets hwnumaNodes
    *
    * @param string $hwnumaNodes 主机的物理cpu数量。
    *
    * @return $this
    */
    public function setHwnumaNodes($hwnumaNodes)
    {
        $this->container['hwnumaNodes'] = $hwnumaNodes;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型。resource_type是为了区分云服务器的物理主机类型。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型。resource_type是为了区分云服务器的物理主机类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets hpetSupport
    *  弹性运服务器高精度时钟是否开启，开启为true，否则为false。（该字段是否返回根据云服务器规格而定）
    *
    * @return string
    */
    public function getHpetSupport()
    {
        return $this->container['hpetSupport'];
    }

    /**
    * Sets hpetSupport
    *
    * @param string $hpetSupport 弹性运服务器高精度时钟是否开启，开启为true，否则为false。（该字段是否返回根据云服务器规格而定）
    *
    * @return $this
    */
    public function setHpetSupport($hpetSupport)
    {
        $this->container['hpetSupport'] = $hpetSupport;
        return $this;
    }

    /**
    * Gets instanceVnictype
    *  网卡类型，值固定为“enhanced”，表示使用增强型网络的资源创建云服务器。
    *
    * @return string
    */
    public function getInstanceVnictype()
    {
        return $this->container['instanceVnictype'];
    }

    /**
    * Sets instanceVnictype
    *
    * @param string $instanceVnictype 网卡类型，值固定为“enhanced”，表示使用增强型网络的资源创建云服务器。
    *
    * @return $this
    */
    public function setInstanceVnictype($instanceVnictype)
    {
        $this->container['instanceVnictype'] = $instanceVnictype;
        return $this;
    }

    /**
    * Gets instanceVnicinstanceBandwidth
    *  最大带宽，单位Mbps，最大值为10000。
    *
    * @return string
    */
    public function getInstanceVnicinstanceBandwidth()
    {
        return $this->container['instanceVnicinstanceBandwidth'];
    }

    /**
    * Sets instanceVnicinstanceBandwidth
    *
    * @param string $instanceVnicinstanceBandwidth 最大带宽，单位Mbps，最大值为10000。
    *
    * @return $this
    */
    public function setInstanceVnicinstanceBandwidth($instanceVnicinstanceBandwidth)
    {
        $this->container['instanceVnicinstanceBandwidth'] = $instanceVnicinstanceBandwidth;
        return $this;
    }

    /**
    * Gets instanceVnicmaxCount
    *  最大网卡个数，最大为4。
    *
    * @return string
    */
    public function getInstanceVnicmaxCount()
    {
        return $this->container['instanceVnicmaxCount'];
    }

    /**
    * Sets instanceVnicmaxCount
    *
    * @param string $instanceVnicmaxCount 最大网卡个数，最大为4。
    *
    * @return $this
    */
    public function setInstanceVnicmaxCount($instanceVnicmaxCount)
    {
        $this->container['instanceVnicmaxCount'] = $instanceVnicmaxCount;
        return $this;
    }

    /**
    * Gets quotalocalDisk
    *  值格式为{type}:{count}:{size}:{safeFormat}，其中：  - type指磁盘类型，当前只支持hdd。 - count指本地磁盘数量，目前支持d1类型：3/6/12/24，d2类型：2/4/8/12/16/24，d3类型：2/4/8/12/16/24/28。 - size指单个磁盘容量，单位GB，目前只支持1675（实际磁盘大小为1800，格式化后可用大小为1675）。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持d1类型：FALSE，d2/d3类型：True。  > 说明：  - 磁盘增强型特有字段。
    *
    * @return string|null
    */
    public function getQuotalocalDisk()
    {
        return $this->container['quotalocalDisk'];
    }

    /**
    * Sets quotalocalDisk
    *
    * @param string|null $quotalocalDisk 值格式为{type}:{count}:{size}:{safeFormat}，其中：  - type指磁盘类型，当前只支持hdd。 - count指本地磁盘数量，目前支持d1类型：3/6/12/24，d2类型：2/4/8/12/16/24，d3类型：2/4/8/12/16/24/28。 - size指单个磁盘容量，单位GB，目前只支持1675（实际磁盘大小为1800，格式化后可用大小为1675）。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持d1类型：FALSE，d2/d3类型：True。  > 说明：  - 磁盘增强型特有字段。
    *
    * @return $this
    */
    public function setQuotalocalDisk($quotalocalDisk)
    {
        $this->container['quotalocalDisk'] = $quotalocalDisk;
        return $this;
    }

    /**
    * Gets quotanvmeSsd
    *  值格式为{type}:{spec}:{size}:{safeFormat}，其中：  - type指主机上配备的nvme ssd的单卡容量大小，当前只支持1.6T/3.2T。 - spec指nvme ssd的规格，包括large/small。large表示大规格，small表示小规格。目前仅支持i3类型：large。 - size指guest使用的盘的容量大小，单位为GB。在spec值为large的情况下，此项即为host单卡大小。在spec值为small的情况下，此为1/4规格或者1/2规格。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持i3类型：True。  > 说明：  - 超高I/O型特有字段。
    *
    * @return string|null
    */
    public function getQuotanvmeSsd()
    {
        return $this->container['quotanvmeSsd'];
    }

    /**
    * Sets quotanvmeSsd
    *
    * @param string|null $quotanvmeSsd 值格式为{type}:{spec}:{size}:{safeFormat}，其中：  - type指主机上配备的nvme ssd的单卡容量大小，当前只支持1.6T/3.2T。 - spec指nvme ssd的规格，包括large/small。large表示大规格，small表示小规格。目前仅支持i3类型：large。 - size指guest使用的盘的容量大小，单位为GB。在spec值为large的情况下，此项即为host单卡大小。在spec值为small的情况下，此为1/4规格或者1/2规格。 - safeFormat指云服务器本地磁盘是否安全格式化，目前仅支持i3类型：True。  > 说明：  - 超高I/O型特有字段。
    *
    * @return $this
    */
    public function setQuotanvmeSsd($quotanvmeSsd)
    {
        $this->container['quotanvmeSsd'] = $quotanvmeSsd;
        return $this;
    }

    /**
    * Gets extraSpeciopersistentGrant
    *  是否支持持久化，值为true。  代表云服务器访问存储的方式为持久化授权。   > 说明：  - 密集存储D1型特有字段。
    *
    * @return string|null
    */
    public function getExtraSpeciopersistentGrant()
    {
        return $this->container['extraSpeciopersistentGrant'];
    }

    /**
    * Sets extraSpeciopersistentGrant
    *
    * @param string|null $extraSpeciopersistentGrant 是否支持持久化，值为true。  代表云服务器访问存储的方式为持久化授权。   > 说明：  - 密集存储D1型特有字段。
    *
    * @return $this
    */
    public function setExtraSpeciopersistentGrant($extraSpeciopersistentGrant)
    {
        $this->container['extraSpeciopersistentGrant'] = $extraSpeciopersistentGrant;
        return $this;
    }

    /**
    * Gets ecsgeneration
    *  弹性云服务器类型的代数。  - s1：通用型I代 - s2：通用型II代 - s3：通用型 - m1：内存优化型I代 - m2：内存优化型II代 - m3：内存优化型 - h1：高性能计算型I代 - h2：高性能计算型II代 - h3：高性能计算型 - hi3：超高性能计算型 - d1：密集存储型I代 - d2：密集存储型II代 - d3：磁盘增强型 - g1：GPU加速型I代 - g2：GPU加速型II代 - f1：FPGA高性能型 - f2：FPGA通用型 - c3：通用计算增强型 - e3：大内存型 - i3：超高I/O型
    *
    * @return string|null
    */
    public function getEcsgeneration()
    {
        return $this->container['ecsgeneration'];
    }

    /**
    * Sets ecsgeneration
    *
    * @param string|null $ecsgeneration 弹性云服务器类型的代数。  - s1：通用型I代 - s2：通用型II代 - s3：通用型 - m1：内存优化型I代 - m2：内存优化型II代 - m3：内存优化型 - h1：高性能计算型I代 - h2：高性能计算型II代 - h3：高性能计算型 - hi3：超高性能计算型 - d1：密集存储型I代 - d2：密集存储型II代 - d3：磁盘增强型 - g1：GPU加速型I代 - g2：GPU加速型II代 - f1：FPGA高性能型 - f2：FPGA通用型 - c3：通用计算增强型 - e3：大内存型 - i3：超高I/O型
    *
    * @return $this
    */
    public function setEcsgeneration($ecsgeneration)
    {
        $this->container['ecsgeneration'] = $ecsgeneration;
        return $this;
    }

    /**
    * Gets ecsvirtualizationEnvTypes
    *  虚拟化类型。  - 如果值为“FusionCompute”，表示弹性云服务器使用基于XEN的虚拟化技术。 - 如果值为“CloudCompute”，表示弹性云服务器使用基于KVM的虚拟化技术。
    *
    * @return string|null
    */
    public function getEcsvirtualizationEnvTypes()
    {
        return $this->container['ecsvirtualizationEnvTypes'];
    }

    /**
    * Sets ecsvirtualizationEnvTypes
    *
    * @param string|null $ecsvirtualizationEnvTypes 虚拟化类型。  - 如果值为“FusionCompute”，表示弹性云服务器使用基于XEN的虚拟化技术。 - 如果值为“CloudCompute”，表示弹性云服务器使用基于KVM的虚拟化技术。
    *
    * @return $this
    */
    public function setEcsvirtualizationEnvTypes($ecsvirtualizationEnvTypes)
    {
        $this->container['ecsvirtualizationEnvTypes'] = $ecsvirtualizationEnvTypes;
        return $this;
    }

    /**
    * Gets pciPassthroughenableGpu
    *  显卡是否直通。  值为“true”，表示GPU直通。
    *
    * @return string
    */
    public function getPciPassthroughenableGpu()
    {
        return $this->container['pciPassthroughenableGpu'];
    }

    /**
    * Sets pciPassthroughenableGpu
    *
    * @param string $pciPassthroughenableGpu 显卡是否直通。  值为“true”，表示GPU直通。
    *
    * @return $this
    */
    public function setPciPassthroughenableGpu($pciPassthroughenableGpu)
    {
        $this->container['pciPassthroughenableGpu'] = $pciPassthroughenableGpu;
        return $this;
    }

    /**
    * Gets pciPassthroughgpuSpecs
    *  G1型和G2型云服务器应用的技术，包括GPU虚拟化和GPU直通。  - 如果该规格的云服务器使用GPU虚拟化技术，且GPU卡的型号为M60-1Q，参数值可设置为“m60_1q:virt:1”。 - 如果该规格的云服务器使用GPU直通技术，且GPU卡的型号为M60，参数值可设置为“m60:direct_graphics:1”。
    *
    * @return string
    */
    public function getPciPassthroughgpuSpecs()
    {
        return $this->container['pciPassthroughgpuSpecs'];
    }

    /**
    * Sets pciPassthroughgpuSpecs
    *
    * @param string $pciPassthroughgpuSpecs G1型和G2型云服务器应用的技术，包括GPU虚拟化和GPU直通。  - 如果该规格的云服务器使用GPU虚拟化技术，且GPU卡的型号为M60-1Q，参数值可设置为“m60_1q:virt:1”。 - 如果该规格的云服务器使用GPU直通技术，且GPU卡的型号为M60，参数值可设置为“m60:direct_graphics:1”。
    *
    * @return $this
    */
    public function setPciPassthroughgpuSpecs($pciPassthroughgpuSpecs)
    {
        $this->container['pciPassthroughgpuSpecs'] = $pciPassthroughgpuSpecs;
        return $this;
    }

    /**
    * Gets pciPassthroughalias
    *  P1型v本地直通GPU的型号和数量，参数值可设置为“nvidia-p100:1”，表示使用该规格创建的弹性云服务器将占用1张NVIDIA P100显卡。
    *
    * @return string
    */
    public function getPciPassthroughalias()
    {
        return $this->container['pciPassthroughalias'];
    }

    /**
    * Sets pciPassthroughalias
    *
    * @param string $pciPassthroughalias P1型v本地直通GPU的型号和数量，参数值可设置为“nvidia-p100:1”，表示使用该规格创建的弹性云服务器将占用1张NVIDIA P100显卡。
    *
    * @return $this
    */
    public function setPciPassthroughalias($pciPassthroughalias)
    {
        $this->container['pciPassthroughalias'] = $pciPassthroughalias;
        return $this;
    }

    /**
    * Gets condoperationstatus
    *  此参数是Region级配置，某个AZ没有在cond:operation:az参数中配置时默认使用此参数的取值。不配置或无此参数时等同于“normal”。取值范围：  - normal：正常商用 - abandon：下线（即不显示） - sellout：售罄 - obt：公测 - promotion：推荐(等同normal，也是商用)
    *
    * @return string|null
    */
    public function getCondoperationstatus()
    {
        return $this->container['condoperationstatus'];
    }

    /**
    * Sets condoperationstatus
    *
    * @param string|null $condoperationstatus 此参数是Region级配置，某个AZ没有在cond:operation:az参数中配置时默认使用此参数的取值。不配置或无此参数时等同于“normal”。取值范围：  - normal：正常商用 - abandon：下线（即不显示） - sellout：售罄 - obt：公测 - promotion：推荐(等同normal，也是商用)
    *
    * @return $this
    */
    public function setCondoperationstatus($condoperationstatus)
    {
        $this->container['condoperationstatus'] = $condoperationstatus;
        return $this;
    }

    /**
    * Gets condoperationaz
    *  此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与cond:operation:status参数相同。  例如：flavor在某个region的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：  - “cond:operation:status”设置为“abandon” - “cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(normal)”  > 说明：  - 如果flavor在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @return string|null
    */
    public function getCondoperationaz()
    {
        return $this->container['condoperationaz'];
    }

    /**
    * Sets condoperationaz
    *
    * @param string|null $condoperationaz 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用cond:operation:status参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与cond:operation:status参数相同。  例如：flavor在某个region的az0正常商用，az1售罄，az2公测，az3正常商用，其他az显示下线，可配置为：  - “cond:operation:status”设置为“abandon” - “cond:operation:az”设置为“az0(normal), az1(sellout), az2(obt), az3(normal)”  > 说明：  - 如果flavor在某个AZ下的状态与cond:operation:status配置状态不同，必须配置该参数。
    *
    * @return $this
    */
    public function setCondoperationaz($condoperationaz)
    {
        $this->container['condoperationaz'] = $condoperationaz;
        return $this;
    }

    /**
    * Gets quotamaxRate
    *  最大带宽  - 单位Mbps，显示为Gbps时除以1000
    *
    * @return string|null
    */
    public function getQuotamaxRate()
    {
        return $this->container['quotamaxRate'];
    }

    /**
    * Sets quotamaxRate
    *
    * @param string|null $quotamaxRate 最大带宽  - 单位Mbps，显示为Gbps时除以1000
    *
    * @return $this
    */
    public function setQuotamaxRate($quotamaxRate)
    {
        $this->container['quotamaxRate'] = $quotamaxRate;
        return $this;
    }

    /**
    * Gets quotaminRate
    *  基准带宽  - 单位Mbps，显示为Gbps时除以1000
    *
    * @return string|null
    */
    public function getQuotaminRate()
    {
        return $this->container['quotaminRate'];
    }

    /**
    * Sets quotaminRate
    *
    * @param string|null $quotaminRate 基准带宽  - 单位Mbps，显示为Gbps时除以1000
    *
    * @return $this
    */
    public function setQuotaminRate($quotaminRate)
    {
        $this->container['quotaminRate'] = $quotaminRate;
        return $this;
    }

    /**
    * Gets quotamaxPps
    *  内网最大收发包能力  - 单位个，显示为xx万时除以10000
    *
    * @return string|null
    */
    public function getQuotamaxPps()
    {
        return $this->container['quotamaxPps'];
    }

    /**
    * Sets quotamaxPps
    *
    * @param string|null $quotamaxPps 内网最大收发包能力  - 单位个，显示为xx万时除以10000
    *
    * @return $this
    */
    public function setQuotamaxPps($quotamaxPps)
    {
        $this->container['quotamaxPps'] = $quotamaxPps;
        return $this;
    }

    /**
    * Gets condoperationcharge
    *  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    *
    * @return string|null
    */
    public function getCondoperationcharge()
    {
        return $this->container['condoperationcharge'];
    }

    /**
    * Sets condoperationcharge
    *
    * @param string|null $condoperationcharge 计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    *
    * @return $this
    */
    public function setCondoperationcharge($condoperationcharge)
    {
        $this->container['condoperationcharge'] = $condoperationcharge;
        return $this;
    }

    /**
    * Gets condoperationchargestop
    *  关机是否收费  - 关机是否计费，默认免费： - charge - free
    *
    * @return string|null
    */
    public function getCondoperationchargestop()
    {
        return $this->container['condoperationchargestop'];
    }

    /**
    * Sets condoperationchargestop
    *
    * @param string|null $condoperationchargestop 关机是否收费  - 关机是否计费，默认免费： - charge - free
    *
    * @return $this
    */
    public function setCondoperationchargestop($condoperationchargestop)
    {
        $this->container['condoperationchargestop'] = $condoperationchargestop;
        return $this;
    }

    /**
    * Gets condspotoperationaz
    *  计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    *
    * @return string|null
    */
    public function getCondspotoperationaz()
    {
        return $this->container['condspotoperationaz'];
    }

    /**
    * Sets condspotoperationaz
    *
    * @param string|null $condspotoperationaz 计费类型  - 计费场景，不配置时都支持 - period，包周期 - demand，按需
    *
    * @return $this
    */
    public function setCondspotoperationaz($condspotoperationaz)
    {
        $this->container['condspotoperationaz'] = $condspotoperationaz;
        return $this;
    }

    /**
    * Gets condoperationroles
    *  允许的角色 匹配的用户标签（roles的op_gatexxx标签）。不设置时所有用户可见
    *
    * @return string|null
    */
    public function getCondoperationroles()
    {
        return $this->container['condoperationroles'];
    }

    /**
    * Sets condoperationroles
    *
    * @param string|null $condoperationroles 允许的角色 匹配的用户标签（roles的op_gatexxx标签）。不设置时所有用户可见
    *
    * @return $this
    */
    public function setCondoperationroles($condoperationroles)
    {
        $this->container['condoperationroles'] = $condoperationroles;
        return $this;
    }

    /**
    * Gets condspotoperationstatus
    *  Flavor在竞价销售模式下的状态  - 不配置时等同abandon - normal，正常商用 - abandon，下线 - sellout，售罄 - obt，公测，未申请时提示申请（暂不支持） - private，私有，只给特定用户显示（暂不支持） - test，试用/免费（暂不支持） - promotion，推荐
    *
    * @return string|null
    */
    public function getCondspotoperationstatus()
    {
        return $this->container['condspotoperationstatus'];
    }

    /**
    * Sets condspotoperationstatus
    *
    * @param string|null $condspotoperationstatus Flavor在竞价销售模式下的状态  - 不配置时等同abandon - normal，正常商用 - abandon，下线 - sellout，售罄 - obt，公测，未申请时提示申请（暂不支持） - private，私有，只给特定用户显示（暂不支持） - test，试用/免费（暂不支持） - promotion，推荐
    *
    * @return $this
    */
    public function setCondspotoperationstatus($condspotoperationstatus)
    {
        $this->container['condspotoperationstatus'] = $condspotoperationstatus;
        return $this;
    }

    /**
    * Gets condnetwork
    *  网络约束 支持网络特性，不配置时以UI配置为准。
    *
    * @return string|null
    */
    public function getCondnetwork()
    {
        return $this->container['condnetwork'];
    }

    /**
    * Sets condnetwork
    *
    * @param string|null $condnetwork 网络约束 支持网络特性，不配置时以UI配置为准。
    *
    * @return $this
    */
    public function setCondnetwork($condnetwork)
    {
        $this->container['condnetwork'] = $condnetwork;
        return $this;
    }

    /**
    * Gets condstorage
    *  存储约束  - 支持磁盘特性，不配置时以UI配置为准。 - scsi，支持scsi - localdisk，支持本地盘 - ib，支持ib
    *
    * @return string|null
    */
    public function getCondstorage()
    {
        return $this->container['condstorage'];
    }

    /**
    * Sets condstorage
    *
    * @param string|null $condstorage 存储约束  - 支持磁盘特性，不配置时以UI配置为准。 - scsi，支持scsi - localdisk，支持本地盘 - ib，支持ib
    *
    * @return $this
    */
    public function setCondstorage($condstorage)
    {
        $this->container['condstorage'] = $condstorage;
        return $this;
    }

    /**
    * Gets condcomputeliveResizable
    *  计算约束  - true，支持在线扩容。 - false或不存在该字段，不支持在线扩容。
    *
    * @return string|null
    */
    public function getCondcomputeliveResizable()
    {
        return $this->container['condcomputeliveResizable'];
    }

    /**
    * Sets condcomputeliveResizable
    *
    * @param string|null $condcomputeliveResizable 计算约束  - true，支持在线扩容。 - false或不存在该字段，不支持在线扩容。
    *
    * @return $this
    */
    public function setCondcomputeliveResizable($condcomputeliveResizable)
    {
        $this->container['condcomputeliveResizable'] = $condcomputeliveResizable;
        return $this;
    }

    /**
    * Gets condcompute
    *  计算约束  - autorecovery，自动恢复特性。 - 不存在该字段，不支持自动恢复。
    *
    * @return string|null
    */
    public function getCondcompute()
    {
        return $this->container['condcompute'];
    }

    /**
    * Sets condcompute
    *
    * @param string|null $condcompute 计算约束  - autorecovery，自动恢复特性。 - 不存在该字段，不支持自动恢复。
    *
    * @return $this
    */
    public function setCondcompute($condcompute)
    {
        $this->container['condcompute'] = $condcompute;
        return $this;
    }

    /**
    * Gets infogpuname
    *  
    *
    * @return string|null
    */
    public function getInfogpuname()
    {
        return $this->container['infogpuname'];
    }

    /**
    * Sets infogpuname
    *
    * @param string|null $infogpuname 
    *
    * @return $this
    */
    public function setInfogpuname($infogpuname)
    {
        $this->container['infogpuname'] = $infogpuname;
        return $this;
    }

    /**
    * Gets infocpuname
    *  
    *
    * @return string|null
    */
    public function getInfocpuname()
    {
        return $this->container['infocpuname'];
    }

    /**
    * Sets infocpuname
    *
    * @param string|null $infocpuname 
    *
    * @return $this
    */
    public function setInfocpuname($infocpuname)
    {
        $this->container['infocpuname'] = $infocpuname;
        return $this;
    }

    /**
    * Gets quotagpu
    *  
    *
    * @return string|null
    */
    public function getQuotagpu()
    {
        return $this->container['quotagpu'];
    }

    /**
    * Sets quotagpu
    *
    * @param string|null $quotagpu 
    *
    * @return $this
    */
    public function setQuotagpu($quotagpu)
    {
        $this->container['quotagpu'] = $quotagpu;
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

